use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SupplierController;
 
<!-- Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail): void {
    $trail->push('Users', route('users.index'));
}); -->