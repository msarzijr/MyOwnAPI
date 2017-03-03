<? namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class MyModel extends Model
{
	protected $fillable = ['name', 'phone', 'secretAttibute', 'password'];
	
	protected $hidden = ['secretAttibute', 'password'];

	function __construct()
	{
		# code...
	}
}