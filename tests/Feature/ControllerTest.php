<?php


namespace Tests\Feature;

use App\Http\Controllers\ClientController;
use App\Http\Repositories\ClientRepository;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test if the index method returns a successful response.
     */
    public function test_index_method_returns_successful_response(): void
    {
        $response = $this->get(route('client.index'));
        $response->assertStatus(200);
    }

    /**
     * Test if the create method returns a successful response.
     */
    public function test_create_method_returns_successful_response(): void
    {
        $response = $this->get(route('client.create'));
        $response->assertStatus(200);
    }

    /**
     * Test if the store method creates a new client and redirects to the index.
     */
    public function test_store_method_creates_new_client_and_redirects(): void
    {
        $data = [
            // Provide valid data for client creation
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            // Add other required fields here
        ];

        $response = $this->post(route('client.store'), $data);
        $response->assertRedirect(route('client.index'));

        // Add assertions to check if the client was created in the database
        $this->assertDatabaseHas('clients', $data);
    }

    /**
     * Test if the show method returns a successful response.
     */
    public function test_show_method_returns_successful_response(): void
    {
        $client = factory(Client::class)->create();
        $response = $this->get(route('client.show', ['client' => $client->id]));
        $response->assertStatus(200);
    }

    // Add similar tests for other methods (edit, update, destroy) following the same pattern.

    /**
     * Test if the sendInfoMail method sends an email.
     */
    public function test_send_info_mail_method_sends_email(): void
    {
        // Mock the Mail facade
        Mail::fake();

        // Create a client (you may need to adjust this depending on your implementation)
        $client = factory(Client::class)->create();

        // Call the sendInfoMail method
        $controller = new ClientController(new ClientRepository());
        $controller->sendInfoMail($client, ['created']);

        // Assert that the mail was sent
        Mail::assertSent(InfoMail::class);

        // You can add more assertions based on your specific implementation
    }
}

