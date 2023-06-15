<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\NoCodeCoverageDriverWithPathCoverageSupportAvailableException;

class Siswas extends Model
{
    use HasFactory;

   protected $fillable = [
    'nama',
    'kelas',
    'jurusan'
   ];

   public function ScopeSelectedbyId($query, $id)
    {
        return $query->where('id', $id);
    }
}
