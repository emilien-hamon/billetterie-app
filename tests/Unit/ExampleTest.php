<?php

// tests/Unit/ClientControllerTest.php

namespace Tests\Unit;

use App\Http\Controllers\ClientController;
use App\Http\Repositories\ClientRepository;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $clientRepository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->clientRepository = $this->getMockBuilder(ClientRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /** @test */
    public function it_should_return_view_for_index()
    {
        $response = $this->get(route('client.index'));

        $response->assertViewIs('client.client');
        $response->assertStatus(200);
    }

    /** @test */
    public function it_should_return_view_for_create()
    {
        $response = $this->get(route('client.create'));

        $response->assertViewIs('client.create');
        $response->assertStatus(200);
    }

    /** @test */
    public function it_should_store_client_and_send_info_mail()
    {
        // You may need to mock the Mail facade depending on your mail sending setup
        // Example: Mail::fake();

        $clientData = // Your client data here (for ClientRequest);

        $this->clientRepository->expects($this->once())
            ->method('store')
            ->willReturn(new Client($clientData));

        $response = $this->post(route('client.store'), $clientData);

        $response->assertRedirect(route('client.index'));
        // You can also assert that the mail was sent, depending on your mail setup.
        // Example: Mail::assertSent(InfoMail::class);
    }

    // Add more tests for other methods (show, edit, update, destroy) as needed
}

