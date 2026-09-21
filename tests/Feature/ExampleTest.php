<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test Home Page Loads Successfully
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('PT.');
        $response->assertSee('BAHTERA');
        $response->assertSee('ANUGERAH');
        $response->assertSee('SENTOSA');
        $response->assertSee('58.58-R');
        $response->assertSee('65.21');
        $response->assertSee('Why Choose');
    }

    /**
     * Test Our Service Page Loads Successfully
     */
    public function test_services_page_returns_successful_response(): void
    {
        $response = $this->get('/our-service');

        $response->assertStatus(200);
        $response->assertSee('Seafarer Recruitment');
        $response->assertSee('Factory Trawlers');
        $response->assertSee('Panama');
        $response->assertSee('Singapore');
        $response->assertSee('BUILDING PARTNERSHIPS');
    }

    /**
     * Test Our Team Page Loads Successfully
     */
    public function test_team_page_returns_successful_response(): void
    {
        $response = $this->get('/our-team');

        $response->assertStatus(200);
        $response->assertSee('Organisasi');
        $response->assertSee('Direktur Utama');
        $response->assertSee('Sertifikasi');
        $response->assertSee('58.58-R');
    }

    /**
     * Test Gallery Page Loads Successfully
     */
    public function test_gallery_page_returns_successful_response(): void
    {
        $response = $this->get('/gallery');

        $response->assertStatus(200);
        $response->assertSee('Galeri');
        $response->assertSee('gallery-lightbox');
    }

    /**
     * Test Contact Us Page Loads Successfully
     */
    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
        $response->assertSee('Pendaftaran');
        $response->assertSee('Khusus File PDF');
        $response->assertSee('Cikarang Barat');
    }

    /**
     * Test Contact Form Submission with PDF Upload
     */
    public function test_contact_form_submission_with_pdf(): void
    {
        $fakePdf = UploadedFile::fake()->create('cv_pelaut.pdf', 500, 'application/pdf');

        $response = $this->post('/contact-us/submit', [
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@example.com',
            'phone' => '+6281234567890',
            'crew_type' => 'Experienced Crew',
            'address' => 'Surabaya, Jawa Timur',
            'message' => 'Melamar untuk posisi Chief Engineer / Deck Officer di kapal penangkap ikan.',
            'pdf_file' => $fakePdf,
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');
    }
}
