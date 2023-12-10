<?php


namespace Tests\Feature;

use App\Http\Controllers\ClientController;
use App\Http\Repositories\ClientRepository;
use App\Mail\InfoMail;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\SalleController;
use App\Http\Repositories\SalleRepository;
use App\Http\Requests\SalleRequest;
use App\Models\Salle;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\ReservationRepository;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;


class ControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;


    public function test_index_method_returns_successful_response(): void
    {
        $response = $this->get(route('client.index'));
        $response->assertStatus(200);
    }

    public function test_create_method_returns_successful_response(): void
    {
        $response = $this->get(route('client.create'));
        $response->assertStatus(200);
    }

    public function test_store_method_creates_new_client_and_redirects(): void
    {
        $data = [

            'name' => $this->faker->name,
            'email' => $this->faker->email,

        ];

        $response = $this->post(route('client.store'), $data);
        $response->assertRedirect(route('client.index'));


        $this->assertDatabaseHas('clients', $data);
    }


    public function test_show_method_returns_successful_response(): void
    {
        $client = factory(Client::class)->create();
        $response = $this->get(route('client.show', ['client' => $client->id]));
        $response->assertStatus(200);
    }

    public function test_send_info_mail_method_sends_email(): void
    {

        Mail::fake();
        $client = factory(Client::class)->create();

        $controller = new ClientController(new ClientRepository());
        $controller->sendInfoMail($client, ['created']);

        Mail::assertSent(InfoMail::class);

    }

    public function test_store_method_creates_new_salle_and_redirects(): void
    {
        $data = [
            'name' => $this->faker->word,
            // Add other required fields here
        ];

        $response = $this->post(route('salle.store'), $data);
        $response->assertRedirect(route('salle.index'));

        $this->assertDatabaseHas('salles', $data);
    }

    public function __construct(ReservationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $client = Client::all();
        $salle = Salle::all();
        $reservation = Reservation::all();

        return view('reservation.reservation', compact('reservation', 'client', 'salle'));
    }

    public function create()
    {
        $salle = Salle::all();
        $client = Client::all();

        return view('reservation.create', compact('client', 'salle'));
    }

    public function store(ReservationRequest $request)
    {
        $reservation = $this->repository->store($request);

        $this->sendInfoMail($reservation, 'created');

        return redirect()->route('reservation.index');
    }

    public function show(Reservation $reservation)
    {
        $client = Client::all();
        $salle = Salle::all();

        return view('reservation.show', compact('reservation', 'client', 'salle'));
    }

    public function edit(String $id)
    {
        $client = Client::all();
        $salle = Salle::all();

        $reservation = Reservation::find($id);

        return view('reservation.edit', compact('reservation', 'client', 'salle'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $this->repository->update($request, $reservation);

        $this->sendInfoMail($reservation, 'updated');

        return redirect()->route('reservation.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        $this->sendInfoMail($reservation, 'deleted');

        return redirect()->route('reservation.index');
    }

    private function sendInfoMail(Reservation $reservation, $action)
    {
        Mail::to('contact@billetterie.fr')->send(new InfoMail(Auth::user(), $reservation, $action));
    }



}

