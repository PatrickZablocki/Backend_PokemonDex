<php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = ['name', 'height', 'weight', 'types', 'sprite'];
    protected $casts = [
        'types' => 'array', // JSON-Daten als Array behandeln
    ];
}
