<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Book;
use App\Models\User;



class BookControllerTest extends TestCase
{
    use RefreshDatabase; // Remet la base de données à zéro avant chaque test

    /** @test */
    public function test_it_can_display_books_page()
{
    // Créer un utilisateur
    $user = User::factory()->create();

    // Simuler la connexion de l'utilisateur
    $this->actingAs($user);

    // Créer un livre
    Book::factory()->create([
        'titre' => 'Laravel Testing',
        'auteur' => 'Jerrold Carroll',
    ]);

    // Tester l'accès à la route
    $response = $this->get(route('admin.books'));

    // Vérifier que la page s'affiche correctement
    $response->assertStatus(200);

    // Vérifier que le livre existe dans la réponse HTML
    $response->assertSee('Laravel Testing');
}
}
