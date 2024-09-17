
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'topic_id', 'image_url'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
