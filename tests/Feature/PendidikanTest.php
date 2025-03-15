<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Pendidikan;

class PendidikanTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_pendidikan()
    {
        $data = [
            'nama' => 'SMA Negeri 1',
            'tingkat' => 'SMA',
        ];
        $this->post('/pendidikan', $data)->assertRedirect('/pendidikan');
        $this->assertDatabaseHas('pendidikan', $data);
    }
}