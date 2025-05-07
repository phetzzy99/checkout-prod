This file is a merged representation of a subset of the codebase, containing specifically included files, combined into a single document by Repomix.

# File Summary

## Purpose
This file contains a packed representation of the entire repository's contents.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Only files matching these patterns are included: app/, config/, routes/, resources/, database/, bootstrap/
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)

## Additional Info

# Directory Structure
```
app/Actions/Fortify/AttemptToAuthenticate.php
app/Actions/Fortify/CreateNewUser.php
app/Actions/Fortify/PasswordValidationRules.php
app/Actions/Fortify/RedirectIfTwoFactorAuthenticatable.php
app/Actions/Fortify/ResetUserPassword.php
app/Actions/Fortify/UpdateUserPassword.php
app/Actions/Fortify/UpdateUserProfileInformation.php
app/Actions/Jetstream/DeleteUser.php
app/Console/Commands/GenerateVapidKeys.php
app/Console/Kernel.php
app/Exceptions/Handler.php
app/Exports/OrdersExport.php
app/Guards/AdminStatefulGuard.php
app/Helper.php
app/Http/Controllers/AdminController.php
app/Http/Controllers/Controller.php
app/Http/Controllers/FacultyController.php
app/Http/Controllers/Frontend/OrderController.php
app/Http/Controllers/IndexController.php
app/Http/Controllers/NotificationController.php
app/Http/Controllers/PatronTypeController.php
app/Http/Controllers/PushNotificationController.php
app/Http/Controllers/ReportController.php
app/Http/Controllers/StaffController.php
app/Http/Kernel.php
app/Http/Middleware/AdminRedirectIfAuthenticated.php
app/Http/Middleware/Authenticate.php
app/Http/Middleware/EncryptCookies.php
app/Http/Middleware/PreventRequestsDuringMaintenance.php
app/Http/Middleware/RedirectIfAuthenticated.php
app/Http/Middleware/TrimStrings.php
app/Http/Middleware/TrustHosts.php
app/Http/Middleware/TrustProxies.php
app/Http/Middleware/VerifyCsrfToken.php
app/Http/Responses/LoginResponse.php
app/Mail/OrderMail.php
app/Models/Admin.php
app/Models/Faculty.php
app/Models/Notification.php
app/Models/OrderItem.php
app/Models/Order.php
app/Models/PatronType.php
app/Models/PushSubscription.php
app/Models/Staff.php
app/Models/User.php
app/Providers/AppServiceProvider.php
app/Providers/AuthServiceProvider.php
app/Providers/BroadcastServiceProvider.php
app/Providers/EventServiceProvider.php
app/Providers/FortifyServiceProvider.php
app/Providers/JetstreamServiceProvider.php
app/Providers/RouteServiceProvider.php
app/View/Components/AppLayout.php
app/View/Components/GuestLayout.php
bootstrap/app.php
bootstrap/cache/.gitignore
config/app.php
config/auth.php
config/broadcasting.php
config/cache.php
config/cors.php
config/database.php
config/filesystems.php
config/fortify.php
config/hashing.php
config/jetstream.php
config/logging.php
config/mail.php
config/queue.php
config/sanctum.php
config/services.php
config/session.php
config/view.php
config/webpush.php
database/factories/AdminFactory.php
database/factories/UserFactory.php
database/.gitignore
database/migrations/2014_10_12_000000_create_users_table.php
database/migrations/2014_10_12_100000_create_password_resets_table.php
database/migrations/2014_10_12_200000_add_two_factor_columns_to_users_table.php
database/migrations/2019_08_19_000000_create_failed_jobs_table.php
database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php
database/migrations/2021_09_16_044458_create_sessions_table.php
database/migrations/2021_09_16_071653_create_admins_table.php
database/migrations/2021_09_22_080456_create_faculties_table.php
database/migrations/2021_09_26_153952_create_patron_types_table.php
database/migrations/2021_09_27_071744_create_orders_table.php
database/migrations/2021_09_27_074247_create_order_items_table.php
database/migrations/2025_01_14_150438_create_notifications_table.php
database/migrations/2025_01_22_104853_create_push_subscriptions_table.php
database/migrations/2025_04_18_132016_add_confirmation_fields_to_notifications_table.php
database/migrations/2025_04_18_134042_create_staff_table.php
database/migrations/2025_04_21_131408_add_status_to_orders_table.php
database/migrations/2025_04_24_162533_add_status_and_note_to_order_items_table.php
database/seeders/DatabaseSeeder.php
resources/css/app.css
resources/js/app.js
resources/js/bootstrap.js
resources/js/web-push.js
resources/lang/en/auth.php
resources/lang/en/pagination.php
resources/lang/en/passwords.php
resources/lang/en/validation.php
resources/markdown/policy.md
resources/markdown/terms.md
resources/views/admin/admin_master.blade.php
resources/views/admin/body/footer.blade.php
resources/views/admin/body/header.blade.php
resources/views/admin/body/sidebar.blade.php
resources/views/admin/index.blade.php
resources/views/admin/notifications/detail.blade.php
resources/views/admin/notifications/index.blade.php
resources/views/api/api-token-manager.blade.php
resources/views/api/index.blade.php
resources/views/auth/confirm-password.blade.php
resources/views/auth/forgot-password.blade.php
resources/views/auth/login.blade.php
resources/views/auth/register.blade.php
resources/views/auth/reset-password.blade.php
resources/views/auth/two-factor-challenge.blade.php
resources/views/auth/verify-email.blade.php
resources/views/backend/faculty/faculty_edit.blade.php
resources/views/backend/faculty/faculty_view.blade.php
resources/views/backend/patron_type/patron_type_edit.blade.php
resources/views/backend/patron_type/patron_type_view.blade.php
resources/views/backend/report/report_pdf.blade.php
resources/views/backend/report/report_show.blade.php
resources/views/backend/report/report_view.blade.php
resources/views/backend/staff/staff_edit.blade.php
resources/views/backend/staff/staff_view.blade.php
resources/views/dashboard.blade.php
resources/views/frontend/body/footer.blade.php
resources/views/frontend/body/header.blade.php
resources/views/frontend/body/sidebar.blade.php
resources/views/frontend/index.blade.php
resources/views/frontend/main_master.blade.php
resources/views/frontend/orders/confirmed_order.blade.php
resources/views/frontend/orders/confirmed_order_list.blade.php
resources/views/frontend/under_construction/closed.blade.php
resources/views/layouts/app.blade.php
resources/views/layouts/guest.blade.php
resources/views/mail/order_mail.blade.php
resources/views/navigation-menu.blade.php
resources/views/notifications/detail.blade.php
resources/views/notifications/index.blade.php
resources/views/policy.blade.php
resources/views/profile/delete-user-form.blade.php
resources/views/profile/logout-other-browser-sessions-form.blade.php
resources/views/profile/show.blade.php
resources/views/profile/two-factor-authentication-form.blade.php
resources/views/profile/update-password-form.blade.php
resources/views/profile/update-profile-information-form.blade.php
resources/views/terms.blade.php
resources/views/welcome.blade.php
routes/api.php
routes/channels.php
routes/console.php
routes/web.php
```

# Files

## File: app/Actions/Fortify/AttemptToAuthenticate.php
```php
<?php

namespace App\Actions\Fortify;

use Illuminate\Auth\Events\Failed;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\LoginRateLimiter;

class AttemptToAuthenticate
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * The login rate limiter instance.
     *
     * @var \Laravel\Fortify\LoginRateLimiter
     */
    protected $limiter;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @param  \Laravel\Fortify\LoginRateLimiter  $limiter
     * @return void
     */
    public function __construct(StatefulGuard $guard, LoginRateLimiter $limiter)
    {
        $this->guard = $guard;
        $this->limiter = $limiter;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        if (Fortify::$authenticateUsingCallback) {
            return $this->handleUsingCustomCallback($request, $next);
        }

        if ($this->guard->attempt(
            $request->only(Fortify::username(), 'password'),
            $request->filled('remember'))
        ) {
            return $next($request);
        }

        $this->throwFailedAuthenticationException($request);
    }

    /**
     * Attempt to authenticate using a custom callback.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return mixed
     */
    protected function handleUsingCustomCallback($request, $next)
    {
        $user = call_user_func(Fortify::$authenticateUsingCallback, $request);

        if (! $user) {
            $this->fireFailedEvent($request);

            return $this->throwFailedAuthenticationException($request);
        }

        $this->guard->login($user, $request->filled('remember'));

        return $next($request);
    }

    /**
     * Throw a failed authentication validation exception.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function throwFailedAuthenticationException($request)
    {
        $this->limiter->increment($request);

        throw ValidationException::withMessages([
            Fortify::username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Fire the failed authentication attempt event with the given arguments.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function fireFailedEvent($request)
    {
        event(new Failed(config('fortify.guard'), null, [
            Fortify::username() => $request->{Fortify::username()},
            'password' => $request->password,
        ]));
    }
}
```

## File: app/Actions/Fortify/CreateNewUser.php
```php
<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
```

## File: app/Actions/Fortify/PasswordValidationRules.php
```php
<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }
}
```

## File: app/Actions/Fortify/RedirectIfTwoFactorAuthenticatable.php
```php
<?php

namespace App\Actions\Fortify;

use Illuminate\Auth\Events\Failed;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\LoginRateLimiter;
use Laravel\Fortify\TwoFactorAuthenticatable;

class RedirectIfTwoFactorAuthenticatable
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * The login rate limiter instance.
     *
     * @var \Laravel\Fortify\LoginRateLimiter
     */
    protected $limiter;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @param  \Laravel\Fortify\LoginRateLimiter  $limiter
     * @return void
     */
    public function __construct(StatefulGuard $guard, LoginRateLimiter $limiter)
    {
        $this->guard = $guard;
        $this->limiter = $limiter;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        $user = $this->validateCredentials($request);

        if (optional($user)->two_factor_secret &&
            in_array(TwoFactorAuthenticatable::class, class_uses_recursive($user))) {
            return $this->twoFactorChallengeResponse($request, $user);
        }

        return $next($request);
    }

    /**
     * Attempt to validate the incoming credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function validateCredentials($request)
    {
        if (Fortify::$authenticateUsingCallback) {
            return tap(call_user_func(Fortify::$authenticateUsingCallback, $request), function ($user) use ($request) {
                if (! $user) {
                    $this->fireFailedEvent($request);

                    $this->throwFailedAuthenticationException($request);
                }
            });
        }

        $model = $this->guard->getProvider()->getModel();

        return tap($model::where(Fortify::username(), $request->{Fortify::username()})->first(), function ($user) use ($request) {
            if (! $user || ! $this->guard->getProvider()->validateCredentials($user, ['password' => $request->password])) {
                $this->fireFailedEvent($request, $user);

                $this->throwFailedAuthenticationException($request);
            }
        });
    }

    /**
     * Throw a failed authentication validation exception.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function throwFailedAuthenticationException($request)
    {
        $this->limiter->increment($request);

        throw ValidationException::withMessages([
            Fortify::username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Fire the failed authentication attempt event with the given arguments.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @return void
     */
    protected function fireFailedEvent($request, $user = null)
    {
        event(new Failed(config('fortify.guard'), $user, [
            Fortify::username() => $request->{Fortify::username()},
            'password' => $request->password,
        ]));
    }

    /**
     * Get the two factor authentication enabled response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function twoFactorChallengeResponse($request, $user)
    {
        $request->session()->put([
            'login.id' => $user->getKey(),
            'login.remember' => $request->filled('remember'),
        ]);

        return $request->wantsJson()
                    ? response()->json(['two_factor' => true])
                    : redirect()->route('two-factor.login');
    }
}
```

## File: app/Actions/Fortify/ResetUserPassword.php
```php
<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function reset($user, array $input)
    {
        Validator::make($input, [
            'password' => $this->passwordRules(),
        ])->validate();

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
```

## File: app/Actions/Fortify/UpdateUserPassword.php
```php
<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'current_password' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->after(function ($validator) use ($user, $input) {
            if (! isset($input['current_password']) || ! Hash::check($input['current_password'], $user->password)) {
                $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
            }
        })->validateWithBag('updatePassword');

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
```

## File: app/Actions/Fortify/UpdateUserProfileInformation.php
```php
<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
```

## File: app/Actions/Jetstream/DeleteUser.php
```php
<?php

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
```

## File: app/Console/Commands/GenerateVapidKeys.php
```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Minishlink\WebPush\VAPID;

class GenerateVapidKeys extends Command
{
    protected $signature = 'generate:vapid-keys';
    protected $description = 'Generate VAPID keys for web push notifications';

    public function handle()
    {
        $vapid = VAPID::createVapidKeys();

        $this->info('VAPID KEYS generated successfully!');
        $this->info('Public Key: ' . $vapid['publicKey']);
        $this->info('Private Key: ' . $vapid['privateKey']);

        // เก็บไว้ใน .env
        $this->appendToEnvFile('VAPID_PUBLIC_KEY', $vapid['publicKey']);
        $this->appendToEnvFile('VAPID_PRIVATE_KEY', $vapid['privateKey']);
    }

    private function appendToEnvFile($key, $value)
    {
        file_put_contents(app()->environmentFilePath(), PHP_EOL . $key . '=' . $value, FILE_APPEND);
    }
}
```

## File: app/Console/Kernel.php
```php
<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
```

## File: app/Exceptions/Handler.php
```php
<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
```

## File: app/Exports/OrdersExport.php
```php
<?php

namespace App\Exports;

use App\Models\Order;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrdersExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $orders;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function collection()
    {
        return $this->orders;
    }

    public function headings(): array
    {
        return [
            'วันที่',
            'เลขที่ใบยืม',
            'ชื่อ-นามสกุล',
            'คณะ/หน่วยงาน',
            'ประเภทสมาชิก',
            'จำนวนรายการ',
            'สถานะ',
            'ผู้ยืนยัน'
        ];
    }

    public function map($order): array
    {
        $staff = null;
        if ($order->notifications->isNotEmpty()) {
            $notification = $order->notifications->first();
            if ($notification->staff) {
                $staff = $notification->staff->name;
            }
        }

        return [
            Carbon::parse($order->created_at)->format('d/m/Y H:i'),
            $order->invoice_no,
            $order->firstname . ' ' . $order->lastname,
            $order->faculty ? $order->faculty->faculty_name_th : '-',
            $order->patrontype ? $order->patrontype->patron_type_name : '-',
            $order->orderItems->count(),
            $order->status == 'success' ? 'สำเร็จ' : 'รอยืนยัน',
            $staff ?? '-'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
```

## File: app/Guards/AdminStatefulGuard.php
```php
<?php

namespace App\Guards;

interface AdminStatefulGuard extends Guard
{
    /**
     * Attempt to authenticate a user using the given credentials.
     *
     * @param  array  $credentials
     * @param  bool  $remember
     * @return bool
     */
    public function attempt(array $credentials = [], $remember = false);

    /**
     * Log a user into the application without sessions or cookies.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function once(array $credentials = []);

    /**
     * Log a user into the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function login(Authenticatable $user, $remember = false);

    /**
     * Log the given user ID into the application.
     *
     * @param  mixed  $id
     * @param  bool  $remember
     * @return \Illuminate\Contracts\Auth\Authenticatable|bool
     */
    public function loginUsingId($id, $remember = false);

    /**
     * Log the given user ID into the application without sessions or cookies.
     *
     * @param  mixed  $id
     * @return \Illuminate\Contracts\Auth\Authenticatable|bool
     */
    public function onceUsingId($id);

    /**
     * Determine if the user was authenticated via "remember me" cookie.
     *
     * @return bool
     */
    public function viaRemember();

    /**
     * Log the user out of the application.
     *
     * @return void
     */
    public function logout();
}
```

## File: app/Helper.php
```php
<?php

function formatDateThai($strDate){
    $strYear = date("Y",strtotime($strDate)+543);
    $strMonth = date("n",strtotime($strDate));
    $strDay = date("j",strtotime($strDate));
    $strHour = date("H",strtotime($strDate));
    $strMinute = date("i",strtotime($strDate));
    $strSeconds = date("s",strtotime($strDate));
    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];

    return "$strDay $strMonthThai $strYear $strHour:$strMinute";
}


function Linenotify($message){

    // AIS
    // 'Authorization: Bearer Zsp78r1K957ZqEUdXIVtllylWn92q7S0WMAJ0Suwb9l'
    
    // Original
    // 'Authorization: Bearer hUSIZSyLQJKJAtIZL0RvglqzN7770QQsuSAUw6fw0Kc'

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://notify-api.line.me/api/notify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'message='.$message,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer hUSIZSyLQJKJAtIZL0RvglqzN7770QQsuSAUw6fw0Kc',
            'Content-Type: application/x-www-form-urlencoded'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
    
}
```

## File: app/Http/Controllers/AdminController.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Pipeline;
use App\Actions\Fortify\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use Illuminate\Support\Facades\Auth;
// use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AdminController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
        
    }

    public function loginForm(){
        return view('auth.login',['guard' => 'admin']);
    }




    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */
    public function create(Request $request): LoginViewResponse
    {
        return app(LoginViewResponse::class);
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }

    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);

    }

    public function AdminLogout(){
        $this->guard->logout();
        // Auth::logout();
        return redirect()->route('admin.login');
    }
}
```

## File: app/Http/Controllers/Controller.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
```

## File: app/Http/Controllers/FacultyController.php
```php
<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyView(){
        $faculty = Faculty::latest()->get();
        return view('backend.faculty.faculty_view',compact('faculty'));
    } // end method

    public function FacultyStore(Request $request){

        $request->validate([
            'faculty_name_th' => 'required|unique:faculties',
        ],
        [
            'faculty_name_th.required' => 'Please Input Faculty Name',
            'faculty_name_th.unique' => 'Faculty Name Duplication',
        ]);

        Faculty::insert([
            'faculty_name_th' => $request->faculty_name_th,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Faculty Inserted Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } //end method


    public function FacultyEdit($id){
        $faculty = Faculty::findOrFail($id);
        return view('backend.faculty.faculty_edit',compact('faculty'));

    } //end method


    public function FacultyUpdate(Request $request){
        $fac_id = $request->id;

        $request->validate([
            'faculty_name_th' => 'required',
        ],
        [
            'faculty_name_th.required' => 'Please Input Faculty Name',
        ]);

        Faculty::findOrFail($fac_id)->update([
            'faculty_name_th' => $request->faculty_name_th,
        ]);

        $notification = array(
            'message' => 'Faculty Updated Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->route('all.faculty')->with($notification);

    } //end method


    public function FacultyDelete($id){

        Faculty::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Faculty Delete Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    } //end method

}
```

## File: app/Http/Controllers/Frontend/OrderController.php
```php
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ListOrder()
    {
        $orders = Order::with('faculty')->orderBy('id', 'DESC')->get();
        return view('frontend.orders.confirmed_order', compact('orders'));
    }

    public function OrderListView($id)
    {
        $orderItem = OrderItem::with('order')->where('order_id', $id)->orderBy('id', 'DESC')->get();
        $patronid = $id;

        // Update notification status to read
        // Notification::where('order_id', $id)->update(['is_read' => true]);

        return view('frontend.orders.confirmed_order_list', compact('orderItem', 'patronid'));
    }

    public function OrderStore(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validation
            $request->validate([
                'addMoreInputFields.*.subject' => 'required',
                'addMoreInputFields.*.author' => 'required',
                'addMoreInputFields.*.callnum' => 'required',
                'faculty_id' => 'required',
                'patrontype_id' => 'required',
                'patronid' => 'required|max:13',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
            ], [
                'faculty_id.required' => 'กรุณาเลือกข้อมูลหน่วยงาน',
                'patrontype_id.required' => 'กรุณาเลือกข้อมูลประเภทสมาชิก',
                'patronid.required' => 'กรุณาใส่ข้อมูลรหัสสมาชิก',
                'patronid.max' => 'กรุณาตรวจสอบจำนวนรหัสสมาชิกให้ถูกต้อง',
                'firstname.required' => 'กรุณาใส่ข้อมูลชื่อ',
                'lastname.required' => 'กรุณาใส่ข้อมูลนามสกุล',
                'phone.required' => 'กรุณาใส่ข้อมูลเบอร์โทรศัพท์',
                'phone.numeric' => 'กรุณาใส่หมายเลขเท่านั้น',
                'email.required' => 'กรุณาใส่ข้อมูลอีเมล์',
                'email.email' => 'กรุณาใส่ข้อมูลอีเมล์ให้ถูกต้อง',
            ]);

            // Create order - เปลี่ยนสถานะเริ่มต้นเป็น 'pending' แทน 'success'
            $order = Order::create([
                'faculty_id' => $request->faculty_id,
                'patron_type_id' => $request->patrontype_id,
                'patronid' => trim($request->patronid),
                'firstname' => trim($request->firstname),
                'lastname' => trim($request->lastname),
                'phone' => trim($request->phone),
                'email' => trim($request->email),
                'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
                'order_date' => Carbon::now()->format('d F Y'),
                'order_month' => Carbon::now()->format('F'),
                'order_year' => Carbon::now()->format('Y'),
                'status' => 'pending', // เปลี่ยนจาก 'success' เป็น 'pending'
                'created_at' => Carbon::now(),
            ]);

            // Create notification
            Notification::create([
                'order_id' => $order->id,
                'message' => 'มีรายการยืมใหม่จาก ' . $request->firstname . ' ' . $request->lastname,
                'is_read' => false,
            ]);

            // Create order items
            foreach ($request->addMoreInputFields as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'subject' => trim($item['subject']),
                    'author' => trim($item['author']),
                    'callnum' => trim($item['callnum']),
                    'created_at' => Carbon::now(),
                ]);
            }

            // Send Pusher notification
            try {
                $pusher = new \Pusher\Pusher(
                    env('PUSHER_APP_KEY'),
                    env('PUSHER_APP_SECRET'),
                    env('PUSHER_APP_ID'),
                    [
                        'cluster' => env('PUSHER_APP_CLUSTER'),
                        'useTLS' => true
                    ]
                );

                $order->load('faculty'); // Eager load faculty relationship
                $notification_data = [
                    'order' => $order,
                    'notification' => [
                        'title' => 'มีรายการยืมใหม่',
                        'message' => "รายการยืมใหม่จาก {$order->firstname} {$order->lastname}"
                    ]
                ];
                // $pusher->trigger('orders', 'new-order', ['order' => $order]);
                $pusher->trigger('orders', 'new-order', $notification_data);

            } catch (\Exception $e) {
                \Log::error('Pusher notification failed: ' . $e->getMessage());
            }

            // Send email
            try {
                $orderItems = OrderItem::with('order')
                    ->where('order_id', $order->id)
                    ->orderBy('id', 'DESC')
                    ->get();

                Mail::to($request->email)->send(new OrderMail($orderItems));
            } catch (\Exception $e) {
                \Log::error('Email sending failed: ' . $e->getMessage());
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'รายการยืมถูกบันทึกเรียบร้อยแล้ว',
                'order' => $order // ส่งข้อมูล order กลับไปด้วย
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Order creation failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง'
            ], 500);
        }
    }
}
```

## File: app/Http/Controllers/IndexController.php
```php
<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Faculty;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PatronType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class IndexController extends Controller
{
    public function index() {

        $patrontype = PatronType::latest()->get();
        $faculties = Faculty::latest()->get();

        return view('frontend.index',compact('patrontype','faculties'));

    } //end method


    public function ListOrder(){

        $orders = Order::with('faculty')->orderBy('id','DESC')->get();
        //$orders = Order::latest()->get();
        return view('frontend.orders.confirmed_order',compact('orders'));

    } //end method


    public function OrderListView($id){

        $orderItem = OrderItem::with('order')->where('order_id',$id)->orderBy('id','DESC')->get();
        // $faculty = Order::with('faculty')->orderBy('id','DESC')->get();
        // $patrontype = Order::with('patrontype')->orderBy('id','DESC')->get();
        $patronid = $id;

        return view('frontend.orders.confirmed_order_list',compact('orderItem','patronid'));

    } //end method


    public function OrderStore(Request $request){

        $request->validate([
            'addMoreInputFields.*.subject' => 'required',
            'addMoreInputFields.*.author' => 'required',
            'addMoreInputFields.*.callnum' => 'required',

            'faculty_id' => 'required',
            'patrontype_id' => 'required',
            'patronid' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ],[
            'faculty_id.required' => 'กรุณาเลือกข้อมูลหน่วยงาน',
            'patrontype_id.required' => 'กรุณาเลือกข้อมูลประเภทสมาชิก',
            'patronid.required' => 'กรุณาใส่ข้อมูลรหัสสมาชิก',
            'firstname.required' => 'กรุณาใส่ข้อมูลชื่อ',
            'lastname.required' => 'กรุณาใส่ข้อมูลนามสกุล',
            'phone.required' => 'กรุณาใส่ข้อมูลเบอร์โทรศัพท์',
            'phone.numeric' => 'กรุณาใส่หมายเลขเท่านั้น',
            'email.required' => 'กรุณาใส่ข้อมูลอีเมล์',
            'email.email' => 'กรุณาใส่ข้อมูลอีเมล์ให้ถูกต้อง',
        ]
    );

        $order_id = Order::insertGetId([
            'faculty_id' => $request->faculty_id,
            'patron_type_id' => $request->patrontype_id,
            'patronid' => trim($request->patronid),
            'firstname' => trim($request->firstname),
            'lastname' => trim($request->lastname),
            'phone' => trim($request->phone),
            'email' => trim($request->email),

            'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'success',
            'created_at' => Carbon::now(),
        ]);

        foreach ($request->addMoreInputFields as $key => $value) {

            $data = [
                'order_id' => $order_id,
                'subject' => trim($value['subject']),
                'author'=> trim($value['author']),
                'callnum' => trim($value['callnum']),
            ];
            OrderItem::create($data);

            // OrderItem::insert([
            //     'order_id' => $order_id,
            //     'subject' => $value['subject'],
            //     'author'=> $value['author'],
            //     'callnum' => $value['callnum'],
            //     'created_at' => Carbon::now(),
            // ]);

        }

        // Start Send Email

        // foreach ($request->addMoreInputFields as $key => $value) {
        //     $send_mail = [
        //         'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
        //         'subject' => trim($value['subject']),
        //         'author'=> trim($value['author']),
        //         'callnum' => trim($value['callnum']),
        //     ];
        // }
        $send_mail = OrderItem::with('order')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        Mail::to($request->email)->send(new OrderMail($send_mail));

        // End Send Email



        // Line Notify
        $test = 'Test Send message';
        foreach ($send_mail as $item) {

            $message = 'OrderNo: '.$item['order']['invoice_no']."\n".
                        'วันที่: '.Carbon::parse($item['order']['order_date'])->thaidate('j M y')."\n\n".
                        'SRU-CIRCULATION (SP): **มีรายการยืมหนังสือจาก**'."\n".
                        'ชื่อผู้ใช้บริการ: '.$item['order']['firstname'].' '.$item['order']['lastname']."\n".
                        'รหัสสมาชิก: '.$item['order']['patronid']."\n".
                        'เบอร์โทร: '.$item['order']['phone']."\n".
                        'E-Mail: '.$item['order']['email']."\n".
                        'ชื่อเรื่อง: '.$item->subject."\n\n".
                        'ผู้แต่ง: '.$item->author."\n\n".
                        'เลขเรียกหนังสือ: '.$item->callnum;

            Linenotify($message);
        }
        // End Line Notify

        return back()->with('success', 'New subject has been added.');

    }


    // public function LoadingSuccess(){
    //     sleep(1);
    //     return response()->json(['success' => 'Coupon Remove Successfully']);
    // }

}
```

## File: app/Http/Controllers/NotificationController.php
```php
<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Order;
use App\Models\Staff;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // public function index()
    // {
    //     $notifications = Notification::with('order')
    //         ->latest()
    //         ->paginate(10);

    //     $staffs = Staff::where('status', 'active')->get();

    //     return view('notifications.index', compact('notifications', 'staffs'));
    // }

    public function index(Request $request)
    {
        $query = Notification::query();

        if ($request->has('status')) {
            if ($request->status === 'read') {
                $query->where('is_read', true);
            } elseif ($request->status === 'unread') {
                $query->where('is_read', false);
            }
        }

        $notifications = $query->with('order.faculty')->orderBy('created_at', 'desc')->paginate(10);

        $staffs = Staff::where('status', 'active')->get();

        return view('notifications.index', compact('notifications', 'staffs'));
    }


    public function getUnreadNotifications()
    {
        $notifications = Notification::with(['order' => function ($query) {
            $query->with('faculty');
        }])
            ->where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($notifications);
    }

    public function viewNotificationDetail($id)
    {
        $notification = Notification::with(['order' => function($query) {
            $query->with(['faculty', 'patrontype', 'orderItems']);
        }])->findOrFail($id);

        $staffs = Staff::where('status', 'active')->get();

        return view('notifications.detail', compact('notification', 'staffs'));
    }

    public function confirmNotification(Request $request, $id)
    {
        $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'confirmation_note' => 'nullable|string|max:255',
            'item_status' => 'array',
            'item_notes' => 'array',
        ],[
            'staff_id.required' => 'กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน',
            'staff_id.exists' => 'เจ้าหน้าที่ที่เลือกไม่มีในระบบ',
        ]);

        $notification = Notification::findOrFail($id);
        $order = Order::findOrFail($notification->order_id);

        // อัปเดต Notification เป็น read
        $notification->update([
            'is_read' => true,
            'confirmed_by' => $request->staff_id,
            'confirmation_note' => $request->confirmation_note,
            'confirmed_at' => now(),
        ]);

        // อัปเดตสถานะ Order เป็น success เมื่อเจ้าหน้าที่ยืนยัน
        $order->update([
            'status' => 'success'
        ]);

        // อัปเดตสถานะของแต่ละรายการ
        $itemStatuses = $request->item_status ?? [];
        $itemNotes = $request->item_notes ?? [];

        foreach ($order->orderItems as $item) {
            $status = isset($itemStatuses[$item->id]) ? $itemStatuses[$item->id] : 'available';
            $note = isset($itemNotes[$item->id]) ? $itemNotes[$item->id] : null;

            $item->update([
                'status' => $status,
                'note' => $note
            ]);
        }

        return redirect()->route('order-list-view', $notification->order_id)
            ->with('success', 'ยืนยันการรับทราบเรียบร้อยแล้ว');
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['is_read' => true]);

        return redirect()->route('order-list-view', $notification->order_id)
            ->with('success', 'ทำเครื่องหมายว่าอ่านแล้ว');
    }

    public function markAllAsRead()
    {
        Notification::where('is_read', false)
            ->update(['is_read' => true]);

        return back()->with('success', 'ทำเครื่องหมายว่าอ่านทั้งหมดแล้ว');
    }
}
```

## File: app/Http/Controllers/PatronTypeController.php
```php
<?php

namespace App\Http\Controllers;

use App\Models\PatronType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatronTypeController extends Controller
{
    public function PatronTypeView(){
        $patron_type = PatronType::latest()->get();
        return view('backend.patron_type.patron_type_view',compact('patron_type'));
    } //end method


    public function PatronTypeStore(Request $request){

        $request->validate([
            'patron_type_name' => 'required|unique:patron_types',
            'type_qty' => 'required|numeric',
        ],[
            'patron_type_name.required' => 'Input Patron Type Name',
            'patron_type_name.unique' => 'Patron Type Name Duplication',
            'type_qty.required' => 'Input Type Qty Name',
            'type_qty.numeric' => 'Input Numeric only',
        ]);

        PatronType::insert([
            'patron_type_name' => $request->patron_type_name,
            'type_qty' => $request->type_qty,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Patron Type Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
        
    } //end method


    public function PatronTypeEdit($id){
        
        $patron_type = PatronType::findOrFail($id);
        return view('backend.patron_type.patron_type_edit',compact('patron_type'));

    } //end method
}
```

## File: app/Http/Controllers/PushNotificationController.php
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PushSubscription;
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

class PushNotificationController extends Controller
{
    public function store(Request $request)
    {
        $subscription = PushSubscription::create([
            'endpoint' => $request->endpoint,
            'public_key' => $request->keys['p256dh'] ?? null,
            'auth_token' => $request->keys['auth'] ?? null,
        ]);

        return response()->json(['status' => 'success']);
    }

    public function sendNotification($message)
    {
        $webPush = new WebPush([
            'VAPID' => [
                'subject' => 'mailto:library@sru.ac.th',
                'publicKey' => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY'),
            ],
        ]);

        $subscriptions = PushSubscription::all();

        foreach ($subscriptions as $sub) {
            $subscription = Subscription::create([
                'endpoint' => $sub->endpoint,
                'publicKey' => $sub->public_key,
                'authToken' => $sub->auth_token,
            ]);

            $webPush->queueNotification($subscription, json_encode([
                'title' => 'SRU Library Notification',
                'body' => $message,
            ]));
        }

        // ส่งการแจ้งเตือนทั้งหมด
        foreach ($webPush->flush() as $report) {
            $endpoint = $report->getRequest()->getUri()->__toString();

            if (!$report->isSuccess()) {
                PushSubscription::where('endpoint', $endpoint)->delete();
            }
        }
    }
}
```

## File: app/Http/Controllers/ReportController.php
```php
<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Order;
use App\Models\Staff;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportController extends Controller
{
    public function ReportView(){

        $staffs = Staff::where('status', 'active')->get();
        return view('backend.report.report_view', compact('staffs'));

    } // end method

    public function ReportByFilter(Request $request){

        $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'month' => 'nullable|numeric|min:1|max:12',
            'year' => 'nullable|numeric|min:2000|max:2100',
            'staff_id' => 'nullable|exists:staff,id',
        ], [
            'start_date.date' => 'กรุณาเลือกวันที่เริ่มต้นให้ถูกต้อง',
            'end_date.date' => 'กรุณาเลือกวันที่สิ้นสุดให้ถูกต้อง',
            'end_date.after_or_equal' => 'วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น',
            'month.numeric' => 'กรุณาเลือกเดือนให้ถูกต้อง',
            'year.numeric' => 'กรุณาเลือกปีให้ถูกต้อง',
            'staff_id.exists' => 'เจ้าหน้าที่ที่เลือกไม่มีในระบบ',
        ]);

        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        //กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างข้อมูลสรุป
        $summary = [
            'total_orders' => $orders->count(),
            'total_items' => $orders->sum(function ($order) {
                return $order->orderItems->count();
            }),
            'by_faculty' => $orders->groupBy('faculty.faculty_name_th')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_patron_type' => $orders->groupBy('patrontype.patron_type_name')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_status' => $orders->groupBy('status')
                ->map(function ($items) {
                    return $items->count();
                }),
        ];

        $staffs = Staff::where('status', 'active')->get();
        $startDate = $request->filled('start_date') ? Carbon::parse($request->start_date) : null;
        $endDate = $request->filled('end_date') ? Carbon::parse($request->end_date) : null;
        $selectedMonth = $request->month;
        $selectedYear = $request->year;
        $selectedStaffId = $request->staff_id;

        return view('backend.report.report_show', compact(
            'orders',
            'summary',
            'staffs',
            'startDate',
            'endDate',
            'selectedMonth',
            'selectedYear',
            'selectedStaffId'
        ));
    }

    public function DownloadReportPDF(Request $request)
    {
        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        // กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างข้อมูลสรุป
        $summary = [
            'total_orders' => $orders->count(),
            'total_items' => $orders->sum(function ($order) {
                return $order->orderItems->count();
            }),
            'by_faculty' => $orders->groupBy('faculty.faculty_name_th')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_patron_type' => $orders->groupBy('patrontype.patron_type_name')
                ->map(function ($items) {
                    return $items->count();
                }),
            'by_status' => $orders->groupBy('status')
                ->map(function ($items) {
                    return $items->count();
                }),
        ];

        $startDate = $request->filled('start_date') ? Carbon::parse($request->start_date) : null;
        $endDate = $request->filled('end_date') ? Carbon::parse($request->end_date) : null;
        $selectedMonth = $request->month;
        $selectedYear = $request->year;
        $selectedStaffId = $request->staff_id;

        $pdf = PDF::loadView('backend.report.report_pdf', compact(
            'orders',
            'summary',
            'startDate',
            'endDate',
            'selectedMonth',
            'selectedYear',
            'selectedStaffId'
        ))->setPaper('a4', 'landscape');

        // สร้างชื่อไฟล์
        $filename = 'รายงานการยืม_';
        if ($startDate && $endDate) {
            $filename .= $startDate->format('d-m-Y') . '_ถึง_' . $endDate->format('d-m-Y');
        } elseif ($selectedMonth && $selectedYear) {
            $filename .= 'เดือน_' . $selectedMonth . '_ปี_' . $selectedYear;
        } elseif ($selectedYear) {
            $filename .= 'ปี_' . $selectedYear;
        } else {
            $filename .= date('d-m-Y');
        }
        $filename .= '.pdf';

        return $pdf->download($filename);
    }

    public function DownloadReportExcel(Request $request)
    {
        $query = Order::with(['faculty', 'patrontype', 'orderItems', 'notifications' => function($q) {
            $q->with('staff');
        }]);

        // กรองตามวันที่
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // กรองตามเดือน
        if ($request->filled('month')) {
            $query->whereMonth('created_at', $request->month);
        }

        // กรองตามปี
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // กรองตามเจ้าหน้าที่ผู้ยืนยัน
        if ($request->filled('staff_id')) {
            $query->whereHas('notifications', function ($q) use ($request) {
                $q->where('confirmed_by', $request->staff_id);
            });
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();

        // สร้างชื่อไฟล์
        $filename = 'รายงานการยืม_';
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            $filename .= $startDate->format('d-m-Y') . '_ถึง_' . $endDate->format('d-m-Y');
        } elseif ($request->filled('month') && $request->filled('year')) {
            $filename .= 'เดือน_' . $request->month . '_ปี_' . $request->year;
        } elseif ($request->filled('year')) {
            $filename .= 'ปี_' . $request->year;
        } else {
            $filename .= date('d-m-Y');
        }
        $filename .= '.xlsx';

        return Excel::download(new OrdersExport($orders), $filename);
    }
}
```

## File: app/Http/Controllers/StaffController.php
```php
<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StaffsExport;
use App\Imports\StaffsImport;

class StaffController extends Controller
{
    public function StaffView()
    {
        $staffs = Staff::withCount(['confirmations' => function ($query) {
            $query->where('is_read', true);
        }])->latest()->get();

        return view('backend.staff.staff_view',compact('staffs'));
    }

    public function StaffStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ],[
            'name.required' => 'กรุณาระบุชื่อเจ้าหน้าที่',
            'status.required' => 'กรุณาระบุสถานะ',
            'status.in' => 'สถานะต้องเป็น active หรือ inactive เท่านั้น',
        ]);

        Staff::create([
            'name' => $request->name,
            'position' => $request->position,
            'department' => $request->department,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'เพิ่มข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function StaffEdit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('backend.staff.staff_edit',compact('staff'));
    }

    public function StaffUpdate(Request $request)
    {
        $staff_id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ],[
            'name.required' => 'กรุณาระบุชื่อเจ้าหน้าที่',
            'status.required' => 'กรุณาระบุสถานะ',
            'status.in' => 'สถานะต้องเป็น active หรือ inactive เท่านั้น',
        ]);

        Staff::findOrFail($staff_id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'department' => $request->department,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'แก้ไขข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->route('all.staff')->with($notification);
    }

    public function StaffDelete($id)
    {
        // ตรวจสอบว่าเจ้าหน้าที่มีการใช้งานในการยืนยันแจ้งเตือนหรือไม่
        $usedInNotifications = Notification::where('confirmed_by', $id)->exists();

        if ($usedInNotifications) {
            $notification = array(
                'message' => 'ไม่สามารถลบข้อมูลได้ เนื่องจากมีการใช้งานในระบบแจ้งเตือน',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }

        Staff::findOrfail($id)->delete();

        $notification = array(
            'message' => 'ลบข้อมูลเจ้าหน้าที่สำเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function exportStaff()
    {
        return Excel::download(new StaffsExport, 'staffs.xlsx');
    }

    public function importForm()
    {
        return view('backend.staff.staff_import');
    }

    public function importStaff(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);

        Excel::import(new StaffsImport, $request->file('file'));

        $notification = array(
            'message' => 'นําเข้าข้อมูลเจ้าหน้าที่สําเร็จ',
            'alert-type' => 'success',
        );

        return redirect()->route('all.staff')->with($notification);
    }
}
```

## File: app/Http/Kernel.php
```php
<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Laravel\Jetstream\Http\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'admin' => \App\Http\Middleware\AdminRedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
```

## File: app/Http/Middleware/AdminRedirectIfAuthenticated.php
```php
<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect($guard.'/dashboard');
            }
        }

        return $next($request);
    }
}
```

## File: app/Http/Middleware/Authenticate.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }
}
```

## File: app/Http/Middleware/EncryptCookies.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Http/Middleware/PreventRequestsDuringMaintenance.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Http/Middleware/RedirectIfAuthenticated.php
```php
<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect($guard.'/dashboard');
            }
        }

        return $next($request);
    }
}
```

## File: app/Http/Middleware/TrimStrings.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
```

## File: app/Http/Middleware/TrustHosts.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
```

## File: app/Http/Middleware/TrustProxies.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
}
```

## File: app/Http/Middleware/VerifyCsrfToken.php
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
```

## File: app/Http/Responses/LoginResponse.php
```php
<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended('admin/dashboard');
    }
}
```

## File: app/Mail/OrderMail.php
```php
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sendmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendmail)
    {
        $this->sendmail = $sendmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->sendmail;
        return $this->from('library@sru.ac.th')->view('mail.order_mail',compact('order'))->subject('Email From SRU Library');
    }
}
```

## File: app/Models/Admin.php
```php
<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
```

## File: app/Models/Faculty.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];
    
}
```

## File: app/Models/Notification.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'message',
        'is_read',
        'confirmed_by',
        'confirmation_note',
        'confirmed_at',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'confirmed_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'confirmed_by');
    }
}
```

## File: app/Models/OrderItem.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'order_id',
        'subject',
        'author',
        'callnum',
        'status',
        'note',
        'created_at',
        'updated_at'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

}
```

## File: app/Models/Order.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'faculty_id',
        'patron_type_id',
        'patronid',
        'firstname',
        'lastname',
        'phone',
        'email',
        'invoice_no',
        'order_date',
        'order_month',
        'order_year',
        'status', // เพิ่ม status ใน fillable
        'created_at',
        'updated_at'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class,'faculty_id','id');
    }

    public function patrontype(){
        return $this->belongsTo(PatronType::class,'patron_type_id','id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
```

## File: app/Models/PatronType.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatronType extends Model
{
    use HasFactory;

    protected $guarded = [];
}
```

## File: app/Models/PushSubscription.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushSubscription extends Model
{
    use HasFactory;
}
```

## File: app/Models/Staff.php
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'department',
        'status'
    ];

    public function confirmations()
    {
        return $this->hasMany(Notification::class, 'confirmed_by');
    }
}
```

## File: app/Models/User.php
```php
<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
```

## File: app/Providers/AppServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
```

## File: app/Providers/AuthServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
```

## File: app/Providers/BroadcastServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
```

## File: app/Providers/EventServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
```

## File: app/Providers/FortifyServiceProvider.php
```php
<?php

namespace App\Providers;

use App\Actions\Fortify\AttemptToAuthenticate;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\StatefulGuard;
use App\Http\Controllers\AdminController;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when([AdminController::class, AttemptToAuthenticate::class, 
        RedirectIfTwoFactorAuthenticatable::class])
        ->needs(StatefulGuard::class)
        ->give(function(){
            return Auth::guard('admin');
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
```

## File: app/Providers/JetstreamServiceProvider.php
```php
<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
```

## File: app/Providers/RouteServiceProvider.php
```php
<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    public static function redirectTo($guard){
        return $guard.'/dashboard';
    }

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
```

## File: app/View/Components/AppLayout.php
```php
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
```

## File: app/View/Components/GuestLayout.php
```php
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
```

## File: bootstrap/app.php
```php
<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
```

## File: bootstrap/cache/.gitignore
```
*
!.gitignore
```

## File: config/app.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'CheckoutSystem Online'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'Asia/Bangkok',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        Barryvdh\DomPDF\ServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\FortifyServiceProvider::class,
        App\Providers\JetstreamServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'PDF' => Barryvdh\DomPDF\Facade::class,

    ],

];
```

## File: config/auth.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
```

## File: config/broadcasting.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "pusher", "ably", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    'connections' => [

        // 'pusher' => [
        //     'driver' => 'pusher',
        //     'key' => env('PUSHER_APP_KEY'),
        //     'secret' => env('PUSHER_APP_SECRET'),
        //     'app_id' => env('PUSHER_APP_ID'),
        //     'options' => [
        //         'cluster' => env('PUSHER_APP_CLUSTER'),
        //         'useTLS' => true,
        //     ],
        // ],

        'pusher' => [
        'driver' => 'pusher',
        'key' => env('PUSHER_APP_KEY'),
        'secret' => env('PUSHER_APP_SECRET'),
        'app_id' => env('PUSHER_APP_ID'),
        'options' => [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true,
            'host' => env('PUSHER_HOST') ?: 'api-'.env('PUSHER_APP_CLUSTER', 'mt1').'.pusher.com',
            'port' => env('PUSHER_PORT', 443),
            'scheme' => env('PUSHER_SCHEME', 'https')
            ],
        ],

        'ably' => [
            'driver' => 'ably',
            'key' => env('ABLY_KEY'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
```

## File: config/cache.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    | Supported drivers: "apc", "array", "database", "file",
    |         "memcached", "redis", "dynamodb", "octane", "null"
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
            'lock_connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'default',
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'),

];
```

## File: config/cors.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
```

## File: config/database.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
            'strict' => true,
            'modes' => [
                //'ONLY_FULL_GROUP_BY', // Disable this to allow grouping by one column
                'STRICT_TRANS_TABLES',
                'NO_ZERO_IN_DATE',
                'NO_ZERO_DATE',
                'ERROR_FOR_DIVISION_BY_ZERO',
                // 'NO_AUTO_CREATE_USER',
                'NO_ENGINE_SUBSTITUTION'
            ],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
```

## File: config/filesystems.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
```

## File: config/fortify.php
```php
<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Fortify Guard
    |--------------------------------------------------------------------------
    |
    | Here you may specify which authentication guard Fortify will use while
    | authenticating users. This value should correspond with one of your
    | guards that is already present in your "auth" configuration file.
    |
    */

    'guard' => 'web',

    /*
    |--------------------------------------------------------------------------
    | Fortify Password Broker
    |--------------------------------------------------------------------------
    |
    | Here you may specify which password broker Fortify can use when a user
    | is resetting their password. This configured value should match one
    | of your password brokers setup in your "auth" configuration file.
    |
    */

    'passwords' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Username / Email
    |--------------------------------------------------------------------------
    |
    | This value defines which model attribute should be considered as your
    | application's "username" field. Typically, this might be the email
    | address of the users but you are free to change this value here.
    |
    | Out of the box, Fortify expects forgot password and reset password
    | requests to have a field named 'email'. If the application uses
    | another name for the field you may define it below as needed.
    |
    */

    'username' => 'email',

    'email' => 'email',

    /*
    |--------------------------------------------------------------------------
    | Home Path
    |--------------------------------------------------------------------------
    |
    | Here you may configure the path where users will get redirected during
    | authentication or password reset when the operations are successful
    | and the user is authenticated. You are free to change this value.
    |
    */

    'home' => RouteServiceProvider::HOME,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Prefix / Subdomain
    |--------------------------------------------------------------------------
    |
    | Here you may specify which prefix Fortify will assign to all the routes
    | that it registers with the application. If necessary, you may change
    | subdomain under which all of the Fortify routes will be available.
    |
    */

    'prefix' => '',

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Middleware
    |--------------------------------------------------------------------------
    |
    | Here you may specify which middleware Fortify will assign to the routes
    | that it registers with the application. If necessary, you may change
    | these middleware but typically this provided default is preferred.
    |
    */

    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | By default, Fortify will throttle logins to five requests per minute for
    | every email and IP address combination. However, if you would like to
    | specify a custom rate limiter to call then you may specify it here.
    |
    */

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

    /*
    |--------------------------------------------------------------------------
    | Register View Routes
    |--------------------------------------------------------------------------
    |
    | Here you may specify if the routes returning views should be disabled as
    | you may not need them when building your own application. This may be
    | especially true if you're writing a custom single-page application.
    |
    */

    'views' => true,

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of the Fortify features are optional. You may disable the features
    | by removing them from this array. You're free to only remove some of
    | these features or you can even remove all of these if you need to.
    |
    */

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // Features::emailVerification(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirmPassword' => true,
        ]),
    ],

];
```

## File: config/hashing.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Bcrypt algorithm. This will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Argon algorithm. These will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],

];
```

## File: config/jetstream.php
```php
<?php

use Laravel\Jetstream\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Jetstream Stack
    |--------------------------------------------------------------------------
    |
    | This configuration value informs Jetstream which "stack" you will be
    | using for your application. In general, this value is set for you
    | during installation and will not need to be changed after that.
    |
    */

    'stack' => 'livewire',

    /*
     |--------------------------------------------------------------------------
     | Jetstream Route Middleware
     |--------------------------------------------------------------------------
     |
     | Here you may specify which middleware Jetstream will assign to the routes
     | that it registers with the application. When necessary, you may modify
     | these middleware; however, this default value is usually sufficient.
     |
     */

    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of Jetstream's features are optional. You may disable the features
    | by removing them from this array. You're free to only remove some of
    | these features or you can even remove all of these if you need to.
    |
    */

    'features' => [
        // Features::termsAndPrivacyPolicy(),
        Features::profilePhotos(),
        // Features::api(),
        // Features::teams(['invitations' => true]),
        Features::accountDeletion(),
    ],

    /*
    |--------------------------------------------------------------------------
    | Profile Photo Disk
    |--------------------------------------------------------------------------
    |
    | This configuration value determines the default disk that will be used
    | when storing profile photos for your application's users. Typically
    | this will be the "public" disk but you may adjust this if needed.
    |
    */

    'profile_photo_disk' => 'public',

];
```

## File: config/logging.php
```php
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
```

## File: config/mail.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
```

## File: config/queue.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
```

## File: config/sanctum.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stateful Domains
    |--------------------------------------------------------------------------
    |
    | Requests from the following domains / hosts will receive stateful API
    | authentication cookies. Typically, these should include your local
    | and production domains which access your API via a frontend SPA.
    |
    */

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
        env('APP_URL') ? ','.parse_url(env('APP_URL'), PHP_URL_HOST) : ''
    ))),

    /*
    |--------------------------------------------------------------------------
    | Expiration Minutes
    |--------------------------------------------------------------------------
    |
    | This value controls the number of minutes until an issued token will be
    | considered expired. If this value is null, personal access tokens do
    | not expire. This won't tweak the lifetime of first-party sessions.
    |
    */

    'expiration' => null,

    /*
    |--------------------------------------------------------------------------
    | Sanctum Middleware
    |--------------------------------------------------------------------------
    |
    | When authenticating your first-party SPA with Sanctum you may need to
    | customize some of the middleware Sanctum uses while processing the
    | request. You may change the middleware listed below as required.
    |
    */

    'middleware' => [
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
    ],

];
```

## File: config/services.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
```

## File: config/session.php
```php
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | While using one of the framework's cache driven session backends you may
    | list a cache store that should be used for these sessions. This value
    | must match with one of the application's configured cache "stores".
    |
    | Affects: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE', null),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" since this is a secure default value.
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => 'lax',

];
```

## File: config/view.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
```

## File: config/webpush.php
```php
<?php

return [
    'vapid' => [
        'subject' => env('VAPID_SUBJECT', 'mailto:library@sru.ac.th'),
        'public_key' => env('VAPID_PUBLIC_KEY'),
        'private_key' => env('VAPID_PRIVATE_KEY'),
    ],
];
```

## File: database/factories/AdminFactory.php
```php
<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
```

## File: database/factories/UserFactory.php
```php
<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
```

## File: database/.gitignore
```
*.sqlite*
```

## File: database/migrations/2014_10_12_000000_create_users_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
```

## File: database/migrations/2014_10_12_100000_create_password_resets_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
```

## File: database/migrations/2014_10_12_200000_add_two_factor_columns_to_users_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwoFactorColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('two_factor_secret')
                    ->after('password')
                    ->nullable();

            $table->text('two_factor_recovery_codes')
                    ->after('two_factor_secret')
                    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('two_factor_secret', 'two_factor_recovery_codes');
        });
    }
}
```

## File: database/migrations/2019_08_19_000000_create_failed_jobs_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
```

## File: database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
```

## File: database/migrations/2021_09_16_044458_create_sessions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
```

## File: database/migrations/2021_09_16_071653_create_admins_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
```

## File: database/migrations/2021_09_22_080456_create_faculties_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('faculty_name_th');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
```

## File: database/migrations/2021_09_26_153952_create_patron_types_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatronTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patron_types', function (Blueprint $table) {
            $table->id();
            $table->string('patron_type_name');
            $table->string('type_qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patron_types');
    }
}
```

## File: database/migrations/2021_09_27_071744_create_orders_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patron_type_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronid');
            $table->string('email');
            $table->string('phone');
            $table->string('invoice_no');
            $table->string('order_date');
            $table->string('order_month');
            $table->string('order_year');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
```

## File: database/migrations/2021_09_27_074247_create_order_items_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('title');
            $table->string('author');
            $table->string('callnumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
```

## File: database/migrations/2025_01_14_150438_create_notifications_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
```

## File: database/migrations/2025_01_22_104853_create_push_subscriptions_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('push_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->text('endpoint');
            $table->string('public_key')->nullable();
            $table->string('auth_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('push_subscriptions');
    }
}
```

## File: database/migrations/2025_04_18_132016_add_confirmation_fields_to_notifications_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfirmationFieldsToNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreignId('confirmed_by')->nullable()->constrained('staff')->onDelete('set null');
            $table->string('confirmation_note')->nullable();
            $table->timestamp('confirmed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['confirmed_by']);
            $table->dropColumn(['confirmed_by', 'confirmation_note', 'confirmed_at']);
        });
    }
}
```

## File: database/migrations/2025_04_18_134042_create_staff_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
```

## File: database/migrations/2025_04_21_131408_add_status_to_orders_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'status')) {
                $table->string('status')->default('pending')->after('order_year');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
}
```

## File: database/migrations/2025_04_24_162533_add_status_and_note_to_order_items_table.php
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndNoteToOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->string('status')->default('available')->after('callnum');
            $table->text('note')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn(['status', 'note']);
        });
    }
}
```

## File: database/seeders/DatabaseSeeder.php
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create();
    }
}
```

## File: resources/css/app.css
```css
@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';
```

## File: resources/js/app.js
```javascript
require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
```

## File: resources/js/bootstrap.js
```javascript
window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
```

## File: resources/js/web-push.js
```javascript
export async function initializePushNotifications() {
    try {
        if (!('Notification' in window)) {
            console.log('This browser does not support notifications');
            return;
        }

        const permission = await Notification.requestPermission();
        if (permission !== 'granted') {
            console.log('Permission not granted for notifications');
            return;
        }

        const registration = await navigator.serviceWorker.register('/sw.js');
        const subscription = await registration.pushManager.subscribe({
            userVisibleOnly: true,
            applicationServerKey: urlBase64ToUint8Array('YOUR_VAPID_PUBLIC_KEY')
        });

        // ส่ง subscription ไปเก็บที่เซิร์ฟเวอร์
        await saveSubscription(subscription);

    } catch (error) {
        console.error('Error initializing push notifications:', error);
    }
}

function urlBase64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding)
        .replace(/\-/g, '+')
        .replace(/_/g, '/');

    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);

    for (let i = 0; i < rawData.length; ++i) {
        outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}

async function saveSubscription(subscription) {
    try {
        await fetch('/api/push-subscriptions', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(subscription)
        });
    } catch (error) {
        console.error('Error saving subscription:', error);
    }
}
```

## File: resources/lang/en/auth.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];
```

## File: resources/lang/en/pagination.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    'previous' => '&laquo; Previous',
    'next' => 'Next &raquo;',

];
```

## File: resources/lang/en/passwords.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => 'Your password has been reset!',
    'sent' => 'We have emailed your password reset link!',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",

];
```

## File: resources/lang/en/validation.php
```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
```

## File: resources/markdown/policy.md
```markdown
# Privacy Policy

Edit this file to define the privacy policy for your application.
```

## File: resources/markdown/terms.md
```markdown
# Terms of Service

Edit this file to define the terms of service for your application.
```

## File: resources/views/admin/admin_master.blade.php
```php
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SRU Checkout Online">
    <meta name="twitter:description" content="SRU Checkout Online">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="SRU Checkout Online">
    <meta property="og:description" content="SRU Checkout Online">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="SRU Checkout Online">
    <meta name="author" content="ThemePixels">

    <title>@yield('title') </title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('admin.body.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.body.header')
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    @yield('admin')
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- เพิ่มใน admin_master.blade.php ก่อนปิด </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- เพิ่มใน admin_master.blade.php ก่อนปิด </body> -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Pusher
            const pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
                cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}'
            });

            // Subscribe to channel
            const channel = pusher.subscribe('orders');

            // Listen for events
            channel.bind('new-order', function(data) {
                // แสดงการแจ้งเตือนบนเบราว์เซอร์
                requestAndShowNotification(
                    data.notification.title,
                    data.notification.message
                );

                // อัพเดทรายการแจ้งเตือนในเมนู
                loadNotifications();

                // แสดง Toast notification
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'info',
                    title: data.notification.message,
                    showConfirmButton: false,
                    timer: 30000
                });
            });

            // ฟังก์ชันขอสิทธิ์และแสดงการแจ้งเตือน
            function requestAndShowNotification(title, message) {
                // ตรวจสอบว่าเบราว์เซอร์รองรับการแจ้งเตือนหรือไม่
                if (!("Notification" in window)) {
                    alert("เบราว์เซอร์นี้ไม่รองรับการแจ้งเตือน");
                    return;
                }

                // ถ้าได้รับอนุญาตแล้ว แสดงการแจ้งเตือนได้เลย
                if (Notification.permission === "granted") {
                    createNotification(title, message);
                }
                // ถ้ายังไม่เคยขอสิทธิ์
                else if (Notification.permission !== "denied") {
                    Notification.requestPermission().then(function (permission) {
                        if (permission === "granted") {
                            createNotification(title, message);
                        }
                    });
                }
            }

            // ฟังก์ชันสร้างการแจ้งเตือน
            function createNotification(title, message) {
                const notification = new Notification(title, {
                    body: message,
                    icon: '/path/to/icon.png', // เพิ่ม icon ตามต้องการ
                });

                // เมื่อคลิกที่การแจ้งเตือน
                notification.onclick = function(event) {
                    event.preventDefault();
                    window.focus();
                    this.close();
                };

                // ปิดการแจ้งเตือนอัตโนมัติหลัง 5 วินาที
                setTimeout(() => {
                    notification.close();
                }, 50000);
            }
        });
    </script>

    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
      }
      @endif
    </script>


  </body>
</html>
```

## File: resources/views/admin/body/footer.blade.php
```php
<footer class="sl-footer mg-t-20">
    <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2021. หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</div>
        <div>Made by SRU Central Library.</div>
    </div>
    <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Share:</span>
        <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
        <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
    </div>
</footer>
```

## File: resources/views/admin/body/header.blade.php
```php
<style>
    /* Notification Styles */
    .notification-dropdown {
        min-width: 350px;
        padding: 0;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
    }

    .notification-header {
        background-color: #0866C6;
        color: white;
        padding: 15px 20px;
        border-radius: 4px 4px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .notification-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        margin-right: 15px;
    }

    .notification-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #dc3545;
        color: white;
        border-radius: 50%;
        min-width: 18px;
        height: 18px;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .notification-item {
        padding: 12px 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .notification-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }

    .notification-item.unread {
        background-color: #f0f8ff;
        border-left: 4px solid #0866C6;
    }

    .notification-content {
        display: flex;
        align-items: center;
    }

    .notification-body {
        flex: 1;
    }

    .notification-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .notification-meta {
        font-size: 12px;
        color: #95a5a6;
    }

    .notification-footer {
        padding: 10px 20px;
        text-align: center;
        border-top: 1px solid #f0f0f0;
        background-color: #f8f9fa;
    }

    .view-all-link {
        color: #0866C6;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .view-all-link:hover {
        color: #064785;
    }
</style>

<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->

    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    @php
                        $unreadCount = \App\Models\Notification::where('is_read', false)->count();
                    @endphp
                    @if($unreadCount > 0)
                        <span class="notification-badge" id="notification-count">{{ $unreadCount }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <!-- Notification Header -->
                    <div class="notification-header">
                        <div class="d-flex align-items-center">
                            <div class="notification-icon">
                                <i class="icon ion-ios-bell-outline tx-18"></i>
                            </div>
                            <div>
                                <h6 class="tx-14 mg-b-0">การแจ้งเตือน</h6>
                                <span class="tx-12" id="unread-count">
                                    @if($unreadCount > 0)
                                        {{ $unreadCount }} การแจ้งเตือนที่ยังไม่ได้ยืนยัน
                                    @else
                                        ไม่มีการแจ้งเตือนที่ยังไม่ได้ยืนยัน
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Notification List -->
                    <div class="notification-list" id="notification-list">
                        @php
                            $notifications = \App\Models\Notification::with(['order' => function($query) {
                                $query->with('faculty');
                            }])
                            ->where('is_read', false)
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
                        @endphp

                        @if($notifications->count() > 0)
                            @foreach($notifications as $notification)
                                <div class="notification-item unread">
                                    <a href="{{ route('notifications.detail', $notification->id) }}" class="notification-content">
                                        <div class="notification-icon">
                                            <i class="icon ion-document-text tx-primary"></i>
                                        </div>
                                        <div class="notification-body">
                                            <div class="notification-title">
                                                {{ $notification->message }}
                                            </div>
                                            <div class="notification-meta">
                                                <i class="icon ion-clock mg-r-5"></i>
                                                {{ $notification->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="pd-y-30 tx-center">
                                <i class="icon ion-ios-bell-outline tx-48 tx-gray-300 d-block mg-b-15"></i>
                                <p class="tx-gray-500 mg-b-0">ไม่มีการแจ้งเตือนที่ยังไม่ได้ยืนยัน</p>
                            </div>
                        @endif
                    </div>

                    <!-- Notification Footer -->
                    <div class="notification-footer">
                        <a href="{{ route('notifications.index') }}" class="view-all-link">
                            <i class="fa fa-list-ul mg-r-5"></i>
                            ดูรายการทั้งหมด
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ Auth::user()->name }}</span>
                    <img src="{{ Auth::user()->profile_photo_url }}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li>
                            <a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- sl-header-right -->
</div><!-- sl-header -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notificationList = document.getElementById('notification-list');
        const notificationCount = document.getElementById('notification-count');
        const unreadCount = document.getElementById('unread-count');

        function updateNotificationUI(notifications) {
            // Update badge and counter
            const unreadNotifications = notifications.filter(n => !n.is_read);

            if (unreadNotifications.length > 0) {
                notificationCount.style.display = 'flex';
                notificationCount.textContent = unreadNotifications.length;
                unreadCount.textContent = `${unreadNotifications.length} การแจ้งเตือนใหม่`;
            } else {
                notificationCount.style.display = 'none';
                unreadCount.textContent = 'ไม่มีการแจ้งเตือนใหม่';
            }

            // Update notification list
            notificationList.innerHTML = notifications.length ?
                notifications.map(notification => `
                <div class="notification-item ${notification.is_read ? '' : 'unread'}">
                    <a href="/notifications/${notification.id}/detail" class="notification-content">
                        <div class="notification-icon">
                            <i class="icon ion-document-text tx-primary"></i>
                        </div>
                        <div class="notification-body">
                            <div class="notification-title">
                                ${notification.message}
                            </div>
                            <div class="notification-meta">
                                <i class="icon ion-clock mg-r-5"></i>
                                ${moment(notification.created_at).fromNow()}
                            </div>
                        </div>
                    </a>
                </div>
            `).join('') :
                `
                <div class="pd-y-30 tx-center">
                    <i class="icon ion-ios-bell-outline tx-48 tx-gray-300 d-block mg-b-15"></i>
                    <p class="tx-gray-500 mg-b-0">ไม่มีการแจ้งเตือน</p>
                </div>
            `;
        }

        // Load initial notifications
        function loadNotifications() {
            fetch('/notifications/unread')
                .then(response => response.json())
                .then(notifications => {
                    updateNotificationUI(notifications);
                });
        }

        // Load notifications on page load
        loadNotifications();

        // Refresh notifications periodically (every 30 seconds)
        setInterval(loadNotifications, 30000);
    });
</script>
```

## File: resources/views/admin/body/sidebar.blade.php
```php
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    //dd($prefix);
@endphp

<div class="sl-logo"><a href="{{ route('dashboard') }}"><i class="icon ion-clipboard"></i> ระบบยืมออนไลน์</a></div>
<div class="sl-sideleft">
    {{-- <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group --> --}}

    {{-- <label class="sidebar-label">Navigation</label> --}}
    <div class="sl-sideleft-menu">
        <a href="{{ route('dashboard') }}" class="sl-menu-link {{ $route == 'dashboard' ? 'active show-sub' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link {{ ($prefix == '/data') ? 'active show-sub' : '' }} ">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">ข้อมูลพื้นฐาน</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('all.faculty') }}" class="nav-link {{($route == 'all.faculty') ? 'active' : '' }}">หน่วยงาน/คณะ</a></li>
            <li class="nav-item"><a href="{{ route('all.patrontype') }}" class="nav-link {{($route == 'all.patrontype') ? 'active' : '' }}">ประเภทสมาชิก</a></li>
            <li class="nav-item"><a href="{{ route('all.staff') }}" class="nav-link {{($route == 'all.staff') ? 'active' : '' }}">เจ้าหน้าที่</a></li>
        </ul>
        <a href="{{ route('notifications.index') }}" class="sl-menu-link {{ ($route == 'notifications.index') ? 'active' : '' }}">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bell-outline tx-22"></i>
                <span class="menu-item-label">การแจ้งเตือน
                @php
                    $unreadCount = \App\Models\Notification::where('is_read', false)->count();
                @endphp
                @if($unreadCount > 0)
                    <span class="badge badge-danger">{{ $unreadCount }}</span>
                @endif
                </span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="{{ route('all.report') }}"
            class="sl-menu-link {{ $prefix == '/reports' ? 'active show-sub' : '' }} ">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Reports</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
```

## File: resources/views/admin/index.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
งานระบบการยืมออนไลน์
@endsection

@php
    $date = date('d F Y');
    $today = App\Models\Order::where('order_date',$date)->count('order_date');

    $month = date('F');
    $months = App\Models\Order::where('order_month',$month)->count('order_month');

    $year = date('Y');
    $years = App\Models\Order::where('order_year',$year)->count('order_year');
@endphp

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">Home</a>
        <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Checkout</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $today }} ครั้ง</h3>
                </div><!-- card-body -->
                {{-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                    <span class="tx-11 tx-white-6">Gross Sales</span>
                    <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                    <span class="tx-11 tx-white-6">Tax Return</span>
                    <h6 class="tx-white mg-b-0">$320</h6>
                </div>
                </div><!-- --> --}}
            </div><!-- card -->
            </div><!-- col-3 -->

            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Checkout</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $months }} ครั้ง</h3>
                </div><!-- card-body -->
                {{-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                    <span class="tx-11 tx-white-6">Gross Sales</span>
                    <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                    <span class="tx-11 tx-white-6">Tax Return</span>
                    <h6 class="tx-white mg-b-0">$320</h6>
                </div>
                </div><!-- --> --}}
            </div><!-- card -->
            </div><!-- col-3 -->

            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Checkout</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $years }} ครั้ง</h3>
                </div><!-- card-body -->
                {{-- <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                    <span class="tx-11 tx-white-6">Gross Sales</span>
                    <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                    <span class="tx-11 tx-white-6">Tax Return</span>
                    <h6 class="tx-white mg-b-0">$320</h6>
                </div>
                </div><!-- --> --}}
            </div><!-- card -->
            </div><!-- col-3 -->

            {{-- <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                    <span class="tx-11 tx-white-6">Gross Sales</span>
                    <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                    <span class="tx-11 tx-white-6">Tax Return</span>
                    <h6 class="tx-white mg-b-0">$320</h6>
                </div>
                </div><!-- -->
            </div><!-- card -->
            </div><!-- col-3 --> --}}

        </div><!-- row -->

        {{-- <div class="row row-sm mg-t-20">
            <div class="col-xl-8">
            <div class="card overflow-hidden">
                <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                <div class="mg-b-20 mg-sm-b-0">
                    <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Profile Statistics</h6>
                    <span class="d-block tx-12">October 23, 2017</span>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-secondary tx-12 active">Today</a>
                    <a href="#" class="btn btn-secondary tx-12">This Week</a>
                    <a href="#" class="btn btn-secondary tx-12">This Month</a>
                </div>
                </div><!-- card-header -->
                <div class="card-body pd-0 bd-color-gray-lighter">
                <div class="row no-gutters tx-center">
                    <div class="col-12 col-sm-4 pd-y-20 tx-left">
                    <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                    </div><!-- col-4 -->
                    <div class="col-6 col-sm-2 pd-y-20">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">6,112</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Views</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">102</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Likes</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">343</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Comments</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l">
                    <h4 class="tx-inverse tx-lato tx-bold mg-b-5">960</h4>
                    <p class="tx-11 mg-b-0 tx-uppercase">Shares</p>
                    </div><!-- col-2 -->
                </div><!-- row -->
                </div><!-- card-body -->
                <div class="card-body pd-0">
                <div id="rickshaw2" class="wd-100p ht-200"></div>
                </div><!-- card-body -->
            </div><!-- card -->

            <div class="card pd-20 pd-sm-25 mg-t-20">
                <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
                <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
                <canvas id="chartBar4" height="300"></canvas>
            </div><!-- card -->

            </div><!-- col-8 -->
            <div class="col-xl-4 mg-t-20 mg-xl-t-0">

            <div class="card pd-20 pd-sm-25">
                <h6 class="card-body-title">Pie Chart</h6>
                <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
                <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->

            <div class="card widget-messages mg-t-20">
                <div class="card-header">
                <span>Messages</span>
                <a href=""><i class="icon ion-more"></i></a>
                </div><!-- card-header -->
                <div class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action media">
                    <img src="../img/img10.jpg" alt="">
                    <div class="media-body">
                    <div class="msg-top">
                        <span>Mienard B. Lumaad</span>
                        <span>4:09am</span>
                    </div>
                    <p class="msg-summary">Many desktop publishing packages and web page editors now use...</p>
                    </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                    <img src="../img/img9.jpg" alt="">
                    <div class="media-body">
                    <div class="msg-top">
                        <span>Isidore Dilao</span>
                        <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">On the other hand, we denounce with righteous indignation and dislike...</p>
                    </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                    <img src="../img/img8.jpg" alt="">
                    <div class="media-body">
                    <div class="msg-top">
                        <span>Kirby Avendula</span>
                        <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">It is a long established fact that a reader will be distracted by the readable...</p>
                    </div><!-- media-body -->
                </a><!-- list-group-item -->
                <a href="" class="list-group-item list-group-item-action media">
                    <img src="../img/img7.jpg" alt="">
                    <div class="media-body">
                    <div class="msg-top">
                        <span>Roven Galeon</span>
                        <span>Yesterday 3:00am</span>
                    </div>
                    <p class="msg-summary">Than the fact that climate change may be causing it to rapidly disappear... </p>
                    </div><!-- media-body -->
                </a><!-- list-group-item -->
                </div><!-- list-group -->
                <div class="card-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
                </div><!-- card-footer -->
            </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row --> --}}

        </div><!-- sl-pagebody -->
        @include('admin.body.footer')
    </div><!-- sl-mainpanel -->

  @endsection
```

## File: resources/views/admin/notifications/detail.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
รายละเอียดการแจ้งเตือน
@endsection

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card pd-20 pd-sm-40">
                    <div class="card-header bg-primary">
                        <h6 class="card-title tx-white">รายละเอียดการแจ้งเตือน</h6>
                    </div>

                    <div class="card-body">
                        <div class="alert alert-info mb-4">
                            <h5><i class="fa fa-info-circle"></i> โปรดทราบ</h5>
                            <p class="mb-0">คุณจำเป็นต้องยืนยันรายการแจ้งเตือนนี้ มิฉะนั้นการแจ้งเตือนจะยังคงแสดงอยู่ในระบบ</p>
                        </div>

                        <div class="pd-20 bg-gray-200 mb-4">
                            <h5 class="tx-dark">รายละเอียดการแจ้งเตือน</h5>
                            <div class="row mg-t-10">
                                <div class="col-md-4">
                                    <p class="tx-medium">วันที่แจ้งเตือน:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->created_at->format('d/m/Y H:i:s') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">ข้อความ:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->message }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-20 bg-gray-200 mb-4">
                            <h5 class="tx-dark">รายละเอียดการยืม</h5>
                            <div class="row mg-t-10">
                                <div class="col-md-4">
                                    <p class="tx-medium">ชื่อ-นามสกุล:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->firstname }} {{ $notification->order->lastname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">รหัสสมาชิก:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->patronid }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">คณะ/หน่วยงาน:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">ประเภทสมาชิก:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->patrontype->patron_type_name ?? '-' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">จำนวนรายการยืม:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->orderItems->count() }} รายการ</p>
                                </div>
                            </div>
                        </div>

                        @if (!$notification->is_read)
                            <form id="confirmation-form" action="{{ route('notifications.confirm', $notification->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="staff_id" class="form-control-label">เลือกเจ้าหน้าที่ผู้ยืนยัน: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="staff_id" id="staff_id" required>
                                        <option value="">-- เลือกเจ้าหน้าที่ --</option>
                                        @foreach ($staffs as $staff)
                                            <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('staff_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="confirmation_note" class="form-control-label">บันทึกเพิ่มเติม:</label>
                                    <textarea class="form-control" name="confirmation_note" id="confirmation_note" rows="3"></textarea>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa fa-check-circle"></i> ยืนยันการรับทราบ
                                    </button>
                                    <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                        <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                    </a>
                                </div>
                            </form>
                        @else
                            <div class="bg-gray-200 pd-20">
                                <h5 class="tx-dark">ข้อมูลการยืนยัน</h5>
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><span class="badge badge-success">ยืนยันแล้ว</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ยืนยันโดย:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->staff->name ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">เวลาที่ยืนยัน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->confirmed_at ? $notification->confirmed_at->format('d/m/Y H:i:s') : '-' }}</p>
                                    </div>
                                </div>
                                @if ($notification->confirmation_note)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="tx-medium">บันทึกเพิ่มเติม:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $notification->confirmation_note }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('order-list-view', $notification->order_id) }}" class="btn btn-info btn-lg">
                                    <i class="fa fa-eye"></i> ดูรายละเอียดการยืม
                                </a>
                                <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                    <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#confirmation-form').submit(function(e) {
            const staffId = $('#staff_id').val();
            if (!staffId) {
                e.preventDefault();
                alert('กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน');
                return false;
            }

            return true;
        });
    });
</script>
@endsection
```

## File: resources/views/admin/notifications/index.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
รายการแจ้งเตือนทั้งหมด
@endsection

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">รายการแจ้งเตือนทั้งหมด</h6>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-wrapper">
                <div class="text-right mb-4">
                    <a href="{{ route('notifications.mark-all-read') }}" class="btn btn-info"
                        onclick="return confirm('ต้องการทำเครื่องหมายว่าอ่านทั้งหมดแล้วใช่หรือไม่?')">
                        <i class="fa fa-check-square-o"></i> อ่านทั้งหมดแล้ว
                    </a>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <form action="{{ route('notifications.index') }}" method="GET">
                            <select id="status-filter" name="status" class="form-control"
                                onchange="this.form.submit()">
                                <option value="">ทั้งหมด</option>
                                <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>
                                    ยังไม่ได้ยืนยัน</option>
                                <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>ยืนยันแล้ว
                                </option>
                            </select>
                        </form>
                    </div>
                </div>

                <table class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>วันที่</th>
                            <th>ข้อความ</th>
                            <th>คณะ/หน่วยงาน</th>
                            <th>สถานะ</th>
                            <th>เจ้าหน้าที่ผู้ยืนยัน</th>
                            <th>การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($notifications as $notification)
                            <tr class="{{ $notification->is_read ? 'read' : 'unread' }}">
                                <td>{{ $notification->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $notification->message }}</td>
                                <td>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</td>
                                <td>
                                    @if ($notification->is_read)
                                        <span class="badge badge-success">ยืนยันแล้ว</span>
                                    @else
                                        <span class="badge badge-danger">รอยืนยัน</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($notification->is_read && $notification->staff)
                                        {{ $notification->staff->name }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('notifications.detail', $notification->id) }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> ดูรายละเอียด
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">ไม่มีการแจ้งเตือน</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $notifications->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .unread {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .unread td:first-child::before {
        content: "•";
        color: #dc3545;
        font-size: 24px;
        margin-right: 8px;
        position: relative;
        top: 2px;
    }

    .pagination {
        justify-content: center;
        margin-top: 20px;
    }

    .page-item:first-child .page-link,
    .page-item:last-child .page-link {
        border-radius: 20px;
    }

    .page-link {
        color: #333;
        border: none;
        padding: 0.5rem 0.75rem;
        margin: 0 3px;
        border-radius: 20px;
    }

    .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }

    .page-link:hover {
        background-color: #f8f9fa;
        color: #0056b3;
    }

    #status-filter {
        border-radius: 4px;
        border: 1px solid #ced4da;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #status-filter:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>
@endsection
```

## File: resources/views/api/api-token-manager.blade.php
```php
<div>
    <!-- Generate API Token -->
    <x-jet-form-section submit="createApiToken">
        <x-slot name="title">
            {{ __('Create API Token') }}
        </x-slot>

        <x-slot name="description">
            {{ __('API tokens allow third-party services to authenticate with our application on your behalf.') }}
        </x-slot>

        <x-slot name="form">
            <!-- Token Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="{{ __('Token Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="createApiTokenForm.name" autofocus />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Token Permissions -->
            @if (Laravel\Jetstream\Jetstream::hasPermissions())
                <div class="col-span-6">
                    <x-jet-label for="permissions" value="{{ __('Permissions') }}" />

                    <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach (Laravel\Jetstream\Jetstream::$permissions as $permission)
                            <label class="flex items-center">
                                <x-jet-checkbox wire:model.defer="createApiTokenForm.permissions" :value="$permission"/>
                                <span class="ml-2 text-sm text-gray-600">{{ $permission }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="created">
                {{ __('Created.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Create') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    @if ($this->user->tokens->isNotEmpty())
        <x-jet-section-border />

        <!-- Manage API Tokens -->
        <div class="mt-10 sm:mt-0">
            <x-jet-action-section>
                <x-slot name="title">
                    {{ __('Manage API Tokens') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('You may delete any of your existing tokens if they are no longer needed.') }}
                </x-slot>

                <!-- API Token List -->
                <x-slot name="content">
                    <div class="space-y-6">
                        @foreach ($this->user->tokens->sortBy('name') as $token)
                            <div class="flex items-center justify-between">
                                <div>
                                    {{ $token->name }}
                                </div>

                                <div class="flex items-center">
                                    @if ($token->last_used_at)
                                        <div class="text-sm text-gray-400">
                                            {{ __('Last used') }} {{ $token->last_used_at->diffForHumans() }}
                                        </div>
                                    @endif

                                    @if (Laravel\Jetstream\Jetstream::hasPermissions())
                                        <button class="cursor-pointer ml-6 text-sm text-gray-400 underline" wire:click="manageApiTokenPermissions({{ $token->id }})">
                                            {{ __('Permissions') }}
                                        </button>
                                    @endif

                                    <button class="cursor-pointer ml-6 text-sm text-red-500" wire:click="confirmApiTokenDeletion({{ $token->id }})">
                                        {{ __('Delete') }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </x-slot>
            </x-jet-action-section>
        </div>
    @endif

    <!-- Token Value Modal -->
    <x-jet-dialog-modal wire:model="displayingToken">
        <x-slot name="title">
            {{ __('API Token') }}
        </x-slot>

        <x-slot name="content">
            <div>
                {{ __('Please copy your new API token. For your security, it won\'t be shown again.') }}
            </div>

            <x-jet-input x-ref="plaintextToken" type="text" readonly :value="$plainTextToken"
                class="mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 w-full"
                autofocus autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                @showing-token-modal.window="setTimeout(() => $refs.plaintextToken.select(), 250)"
            />
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('displayingToken', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- API Token Permissions Modal -->
    <x-jet-dialog-modal wire:model="managingApiTokenPermissions">
        <x-slot name="title">
            {{ __('API Token Permissions') }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach (Laravel\Jetstream\Jetstream::$permissions as $permission)
                    <label class="flex items-center">
                        <x-jet-checkbox wire:model.defer="updateApiTokenForm.permissions" :value="$permission"/>
                        <span class="ml-2 text-sm text-gray-600">{{ $permission }}</span>
                    </label>
                @endforeach
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('managingApiTokenPermissions', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="updateApiToken" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Delete Token Confirmation Modal -->
    <x-jet-confirmation-modal wire:model="confirmingApiTokenDeletion">
        <x-slot name="title">
            {{ __('Delete API Token') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you would like to delete this API token?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingApiTokenDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteApiToken" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
```

## File: resources/views/api/index.blade.php
```php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('API Tokens') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-app-layout>
```

## File: resources/views/auth/confirm-password.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/auth/forgot-password.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/auth/login.blade.php
```php
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{  isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin | Login</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Admin <span class="tx-info tx-normal">Login</span></div>
        {{-- <div class="tx-center mg-b-60">Professional Admin Template Design</div> --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{  isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf

            <div class="form-group mg-t-50">
            <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email"  required autofocus/>
            </div><!-- form-group -->

            <div class="form-group">
            <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="current-password" />
            {{-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> --}}
            

            </div><!-- form-group -->
            <div class="mg-t-50">
                <button type="submit" class="btn btn-info btn-block">Log In</button>
            </div>

        </form>
        {{-- <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div> --}}
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>

  </body>
</html>
```

## File: resources/views/auth/register.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/auth/reset-password.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/auth/two-factor-challenge.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/auth/verify-email.blade.php
```php
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
```

## File: resources/views/backend/faculty/faculty_edit.blade.php
```php
@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">

    <div class="sl-pagebody">

      <div class="row row-sm mg-t-5">
        
        {{-- -------------- Add Faculty Page ---------------------- --}}

        <div class="col-8 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Edit Faculty</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="{{ route('faculty.update') }}" >
                      @csrf

                      <input type="hidden" name="id" value="{{ $faculty->id }}">

                        <div class="form-group">
                          <label class="form-control-label">Faculty Name Thai: <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="faculty_name_th" placeholder="Enter Faculty Name" value="{{ $faculty->faculty_name_th }}">
                          @error('faculty_name_th')
                            <div class="alert alert-danger" role="alert">
                              <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                            </div>
                            {{-- <span class="text-danger">* {{ $message }}</span> --}}
                          @enderror
                        </div>

                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Edit Data">
                        </div>
                        
                      </form>

                  </div><!-- col-4 -->
                </div><!-- row -->
              </div><!-- form-layout -->

          </div><!-- card -->
        </div><!-- col-3 -->

      </div><!-- row -->


    </div><!-- sl-pagebody -->


    @include('admin.body.footer')

  </div><!-- sl-mainpanel -->


    
@endsection
```

## File: resources/views/backend/faculty/faculty_view.blade.php
```php
@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
@endsection

@php

    $month = date('F');
    $day = date('d');
    $year = date('Y');

@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">

    <div class="sl-pagebody">

      <div class="row row-sm mg-t-5">
        <div class="col-xl-8">
          <div class="card overflow-hidden">
            <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
              <div class="mg-b-20 mg-sm-b-0">
                <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Faculty List</h6>
                <span class="d-block tx-12">{{$month}} {{$day}}, {{$year}}</span>
              </div>
            </div><!-- card-header -->

            <div class="card pd-20 pd-sm-20">
      
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-50p">Faculty Name TH</th>
                      <th class="wd-10p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $i = 1;
                      @endphp
                      @foreach($faculty as $item)
                    <tr>
                      {{-- <th scope="row"> {{ $faculty->firstItem()+$loop->index }}</th> --}}
                      <td>{{ $item->faculty_name_th }}</td>
                      <td>
                          <a href="{{ route('faculty.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> Edit</a>
                          
                          <a href="{{ route('faculty.delete',$item->id) }}" class="btn btn-danger" title="Delete Data"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->

          </div><!-- card -->
        </div><!-- col-8 -->


        {{-- -------------- Add Faculty Page ---------------------- --}}

        <div class="col-4 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Add Faculty</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="{{ route('faculty.store') }}" >
                      @csrf

                        <div class="form-group">
                          <label class="form-control-label">Faculty Name Thai: </label>
                          <input class="form-control" type="text" name="faculty_name_th" placeholder="Enter Faculty Name">
                          @error('faculty_name_th')
                            <span class="text-danger">* {{ $message }}</span>
                          @enderror
                        </div>

                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Add New">
                        </div>
                        
                      </form>

                  </div><!-- col-4 -->
                </div><!-- row -->
              </div><!-- form-layout -->

          </div><!-- card -->
        </div><!-- col-3 -->

      </div><!-- row -->


    </div><!-- sl-pagebody -->


    @include('admin.body.footer')

  </div><!-- sl-mainpanel -->




  <script type="text/javascript">
    $(document).ready(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>
    
@endsection
```

## File: resources/views/backend/patron_type/patron_type_edit.blade.php
```php
@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">

    <div class="sl-pagebody">

      <div class="row row-sm mg-t-5">
        
        {{-- -------------- Add Faculty Page ---------------------- --}}

        <div class="col-8 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Edit Patron Type</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="" >
                      @csrf

                      <input type="hidden" name="id" value="{{ $patron_type->id }}">

                        <div class="form-group mg-t-20">
                          <label class="form-control-label">Patron Type Name: <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="patron_type_name" placeholder="Enter Patron Type Name" value="{{ $patron_type->patron_type_name }}">
                          @error('patron_type_name')
                            <div class="alert alert-danger" role="alert">
                              <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                            </div>
                            {{-- <span class="text-danger">* {{ $message }}</span> --}}
                          @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Type Qty : </label>
                            <input class="form-control" type="text" name="type_qty" placeholder="Enter Type Qty" value="{{ $patron_type->type_qty }}">
                            @error('type_qty')
                                <div class="alert alert-danger" role="alert">
                                    <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Edit Data">
                        </div>
                        
                      </form>

                  </div><!-- col-4 -->
                </div><!-- row -->
              </div><!-- form-layout -->

          </div><!-- card -->
        </div><!-- col-3 -->

      </div><!-- row -->


    </div><!-- sl-pagebody -->


    @include('admin.body.footer')

  </div><!-- sl-mainpanel -->


    
@endsection
```

## File: resources/views/backend/patron_type/patron_type_view.blade.php
```php
@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
@endsection

@php

    $month = date('F');
    $day = date('d');
    $year = date('Y');

@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">

    <div class="sl-pagebody">

      <div class="row row-sm mg-t-5">
        <div class="col-xl-8">
          <div class="card overflow-hidden">
            <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
              <div class="mg-b-20 mg-sm-b-0">
                <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Patron Type List</h6>
                <span class="d-block tx-12">{{$month}} {{$day}}, {{$year}}</span>
              </div>
            </div><!-- card-header -->

            <div class="card pd-20 pd-sm-20">
      
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-50p">Patron Type Name</th>
                      <th class="wd-50p">Type Qty</th>
                      <th class="wd-10p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($patron_type as $item)
                    <tr>
                      {{-- <th scope="row"> {{ $faculty->firstItem()+$loop->index }}</th> --}}
                      <td>{{ $item->patron_type_name }}</td>
                      <td>{{ $item->type_qty }} เล่ม/ครั้ง</td>
                      <td>
                          <a href="{{ route('patrontype.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> Edit</a>
                          
                          <a href="{{ route('faculty.delete',$item->id) }}" class="btn btn-danger" title="Delete Data"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->

          </div><!-- card -->
        </div><!-- col-8 -->


        {{-- -------------- Add Patron Type Page ---------------------- --}}

        <div class="col-4 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Add Patron Type Name</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="{{ route('patrontype.store') }}" >
                      @csrf

                        <div class="form-group mg-t-20">
                          <label class="form-control-label">Patron Type Name : </label>
                          <input class="form-control" type="text" name="patron_type_name" placeholder="Enter Patron Type Name">
                          @error('patron_type_name')
                            <div class="alert alert-danger" role="alert">
                                <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Type Qty : </label>
                            <input class="form-control" type="text" name="type_qty" placeholder="Enter Type Qty">
                            @error('type_qty')
                                <div class="alert alert-danger" role="alert">
                                    <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Add New">
                        </div>
                        
                      </form>

                  </div><!-- col-4 -->
                </div><!-- row -->
              </div><!-- form-layout -->

          </div><!-- card -->
        </div><!-- col-3 -->

      </div><!-- row -->


    </div><!-- sl-pagebody -->


    @include('admin.body.footer')

  </div><!-- sl-mainpanel -->




  <script type="text/javascript">
    $(document).ready(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>
    
@endsection
```

## File: resources/views/backend/report/report_pdf.blade.php
```php
<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>รายงานการยืมออนไลน์</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ storage_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew";
            font-size: 16px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .summary-table th, .summary-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .summary-table th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .orders-table {
            width: 100%;
            border-collapse: collapse;
        }
        .orders-table th, .orders-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .orders-table th {
            background-color: #f2f2f2;
        }
        .page-break {
            page-break-after: always;
        }
        .table-header {
            background-color: #4a5568;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>รายงานการยืมออนไลน์</h1>
        <h3>หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</h3>

        @if ($startDate && $endDate)
            <h4>ระหว่างวันที่ {{ $startDate->format('d/m/Y') }} ถึง {{ $endDate->format('d/m/Y') }}</h4>
        @elseif ($selectedMonth && $selectedYear)
            <h4>เดือน {{ ['', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'][(int)$selectedMonth] }} ปี {{ $selectedYear + 543 }}</h4>
        @elseif ($selectedYear)
            <h4>ปี {{ $selectedYear + 543 }}</h4>
        @endif

        @if ($selectedStaffId)
            <h4>เจ้าหน้าที่: {{ App\Models\Staff::find($selectedStaffId)->name }}</h4>
        @endif
    </div>

    <h2>ข้อมูลสรุป</h2>

    <table class="summary-table">
        <tr>
            <th>จำนวนการยืมทั้งหมด</th>
            <td>{{ $summary['total_orders'] }} รายการ</td>
        </tr>
        <tr>
            <th>จำนวนหนังสือที่ยืมทั้งหมด</th>
            <td>{{ $summary['total_items'] }} เล่ม</td>
        </tr>
    </table>

    <h3>แยกตามคณะ/หน่วยงาน</h3>
    <table class="summary-table">
        <tr>
            <th>คณะ/หน่วยงาน</th>
            <th>จำนวน</th>
        </tr>
        @foreach($summary['by_faculty'] as $faculty => $count)
            <tr>
                <td>{{ $faculty }}</td>
                <td>{{ $count }}</td>
            </tr>
        @endforeach
    </table>

    <h3>แยกตามประเภทสมาชิก</h3>
    <table class="summary-table">
        <tr>
            <th>ประเภทสมาชิก</th>
            <th>จำนวน</th>
        </tr>
        @foreach($summary['by_patron_type'] as $type => $count)
            <tr>
                <td>{{ $type }}</td>
                <td>{{ $count }}</td>
            </tr>
        @endforeach
    </table>

    <h3>แยกตามสถานะ</h3>
    <table class="summary-table">
        <tr>
            <th>สถานะ</th>
            <th>จำนวน</th>
        </tr>
        @if(isset($summary['by_status']['success']))
            <tr>
                <td>สำเร็จ</td>
                <td>{{ $summary['by_status']['success'] }}</td>
            </tr>
        @endif
        @if(isset($summary['by_status']['pending']))
            <tr>
                <td>รอยืนยัน</td>
                <td>{{ $summary['by_status']['pending'] }}</td>
            </tr>
        @endif
    </table>

    <div class="page-break"></div>

    <h2>รายละเอียดการยืม</h2>

    <table class="orders-table">
        <tr class="table-header">
            <th>วันที่</th>
            <th>เลขที่ใบยืม</th>
            <th>ชื่อ-นามสกุล</th>
            <th>คณะ/หน่วยงาน</th>
            <th>ประเภทสมาชิก</th>
            <th>จำนวนรายการ</th>
            <th>สถานะ</th>
            <th>ผู้ยืนยัน</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                <td>{{ $order->invoice_no }}</td>
                <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                <td>{{ $order->faculty->faculty_name_th ?? '-' }}</td>
                <td>{{ $order->patrontype->patron_type_name ?? '-' }}</td>
                <td>{{ $order->orderItems->count() }}</td>
                <td>{{ $order->status == 'success' ? 'สำเร็จ' : 'รอยืนยัน' }}</td>
                <td>
                    @php
                        $staff = null;
                        if ($order->notifications->isNotEmpty()) {
                            $notification = $order->notifications->first();
                            if ($notification->is_read && $notification->staff) {
                                $staff = $notification->staff->name;
                            }
                        }
                    @endphp
                    {{ $staff ?? '-' }}
                </td>
            </tr>
        @endforeach
    </table>

    <div style="text-align: right; margin-top: 20px; font-size: 12px;">
        <p>พิมพ์เมื่อ: {{ now()->format('d/m/Y H:i:s') }}</p>
    </div>
</body>
</html>
```

## File: resources/views/backend/report/report_show.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
รายงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">หน้าหลัก</a>
        <a class="breadcrumb-item" href="{{ route('all.report') }}">รายงาน</a>
        <span class="breadcrumb-item active">ผลการค้นหา</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">รายงานการยืมออนไลน์</h6>

            <div class="alert alert-info pd-y-15 pd-x-20 mg-b-20">
                <h6 class="tx-gray-800 mg-b-0"><i class="icon ion-information-circled"></i> ตัวกรองที่ใช้:</h6>
                <div class="row mg-t-10">
                    @if ($startDate && $endDate)
                        <div class="col-md-3">
                            <strong>ช่วงวันที่:</strong> {{ $startDate->format('d/m/Y') }} - {{ $endDate->format('d/m/Y') }}
                        </div>
                    @endif
                    @if ($selectedMonth)
                        <div class="col-md-3">
                            <strong>เดือน:</strong>
                            @php
                                $months = ['', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
                            @endphp
                            {{ $months[(int)$selectedMonth] }}
                        </div>
                    @endif
                    @if ($selectedYear)
                        <div class="col-md-3">
                            <strong>ปี:</strong> {{ $selectedYear + 543 }}
                        </div>
                    @endif
                    @if ($selectedStaffId)
                        <div class="col-md-3">
                            <strong>เจ้าหน้าที่:</strong>
                            @php
                                $staff = App\Models\Staff::find($selectedStaffId);
                            @endphp
                            {{ $staff ? $staff->name : '-' }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mg-b-30">
                <div class="col-md-6">
                    <!-- ข้อมูลสรุป -->
                    <div class="card bd-0">
                        <div class="card-header bg-info pd-y-15 pd-x-20">
                            <h6 class="card-title tx-white mg-b-0">ข้อมูลสรุป</h6>
                        </div>
                        <div class="card-body pd-20">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="tx-primary">จำนวนการยืมทั้งหมด</h5>
                                    <h2 class="tx-danger tx-lato tx-bold mg-b-15">{{ $summary['total_orders'] }} รายการ</h2>

                                    <h5 class="tx-primary">จำนวนหนังสือที่ยืมทั้งหมด</h5>
                                    <h2 class="tx-danger tx-lato tx-bold">{{ $summary['total_items'] }} เล่ม</h2>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามคณะ/หน่วยงาน</h5>
                                    <ul class="list-group">
                                        @foreach($summary['by_faculty'] as $faculty => $count)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $faculty }}
                                                <span class="badge badge-primary badge-pill">{{ $count }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามสถานะ</h5>
                                    <ul class="list-group">
                                        @if(isset($summary['by_status']['success']))
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                สำเร็จ
                                                <span class="badge badge-success badge-pill">{{ $summary['by_status']['success'] }}</span>
                                            </li>
                                        @endif
                                        @if(isset($summary['by_status']['pending']))
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                รอยืนยัน
                                                <span class="badge badge-warning badge-pill">{{ $summary['by_status']['pending'] }}</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามประเภทสมาชิก</h5>
                                    <ul class="list-group">
                                        @foreach($summary['by_patron_type'] as $type => $count)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $type }}
                                                <span class="badge badge-info badge-pill">{{ $count }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- ปุ่มดาวน์โหลด -->
                    <div class="card bd-0">
                        <div class="card-header bg-success pd-y-15 pd-x-20">
                            <h6 class="card-title tx-white mg-b-0">ดาวน์โหลดรายงาน</h6>
                        </div>
                        <div class="card-body pd-20">
                            <form method="POST" action="{{ route('report.download.pdf') }}" class="mb-3">
                                @csrf
                                @if ($startDate && $endDate)
                                    <input type="hidden" name="start_date" value="{{ $startDate }}">
                                    <input type="hidden" name="end_date" value="{{ $endDate }}">
                                @endif
                                @if ($selectedMonth)
                                    <input type="hidden" name="month" value="{{ $selectedMonth }}">
                                @endif
                                @if ($selectedYear)
                                    <input type="hidden" name="year" value="{{ $selectedYear }}">
                                @endif
                                @if ($selectedStaffId)
                                    <input type="hidden" name="staff_id" value="{{ $selectedStaffId }}">
                                @endif
                                <button type="submit" class="btn btn-danger btn-block btn-lg">
                                    <i class="fa fa-file-pdf-o mr-2"></i> ดาวน์โหลด PDF
                                </button>
                            </form>

                            <form method="POST" action="{{ route('report.download.excel') }}">
                                @csrf
                                @if ($startDate && $endDate)
                                    <input type="hidden" name="start_date" value="{{ $startDate }}">
                                    <input type="hidden" name="end_date" value="{{ $endDate }}">
                                @endif
                                @if ($selectedMonth)
                                    <input type="hidden" name="month" value="{{ $selectedMonth }}">
                                @endif
                                @if ($selectedYear)
                                    <input type="hidden" name="year" value="{{ $selectedYear }}">
                                @endif
                                @if ($selectedStaffId)
                                    <input type="hidden" name="staff_id" value="{{ $selectedStaffId }}">
                                @endif
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    <i class="fa fa-file-excel-o mr-2"></i> ดาวน์โหลด Excel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">วันที่</th>
                            <th class="wd-15p">เลขที่ใบยืม</th>
                            <th class="wd-15p">ชื่อ-นามสกุล</th>
                            <th class="wd-15p">คณะ/หน่วยงาน</th>
                            <th class="wd-10p">ประเภทสมาชิก</th>
                            <th class="wd-10p">จำนวนรายการ</th>
                            <th class="wd-10p">สถานะ</th>
                            <th class="wd-10p">ผู้ยืนยัน</th>
                            <th class="wd-10p">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                                <td>{{ $order->faculty->faculty_name_th ?? '-' }}</td>
                                <td>{{ $order->patrontype->patron_type_name ?? '-' }}</td>
                                <td>{{ $order->orderItems->count() }}</td>
                                <td>
                                    @if($order->status == 'success')
                                        <span class="badge badge-success">สำเร็จ</span>
                                    @else
                                        <span class="badge badge-warning">รอยืนยัน</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $staff = null;
                                        if ($order->notifications->isNotEmpty()) {
                                            $notification = $order->notifications->first();
                                            if ($notification->is_read && $notification->staff) {
                                                $staff = $notification->staff->name;
                                            }
                                        }
                                    @endphp
                                    {{ $staff ?? '-' }}
                                </td>
                                <td>
                                    <a href="{{ route('order-list-view', $order->id) }}" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> ดูรายละเอียด
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.body.footer')
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'ค้นหา...',
                sSearch: '',
                lengthMenu: '_MENU_ รายการ/หน้า',
                info: 'แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ',
                paginate: {
                    first: 'หน้าแรก',
                    last: 'หน้าสุดท้าย',
                    next: 'ถัดไป',
                    previous: 'ก่อนหน้า'
                }
            }
        });

        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });
    });
</script>

@endsection
```

## File: resources/views/backend/report/report_view.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
รายงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js"></script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">หน้าหลัก</a>
        <span class="breadcrumb-item active">รายงานการยืมออนไลน์</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">รายงานการยืมออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">กรุณาเลือกตัวกรองเพื่อดูรายงาน</p>

            <div class="form-layout">
                <form method="POST" action="{{ route('report.by.filter') }}" id="report-form">
                    @csrf
                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามช่วงวันที่</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">วันที่เริ่มต้น:</label>
                                        <input type="text" name="start_date" class="form-control datepicker" placeholder="เลือกวันที่เริ่มต้น">
                                        @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">วันที่สิ้นสุด:</label>
                                        <input type="text" name="end_date" class="form-control datepicker" placeholder="เลือกวันที่สิ้นสุด">
                                        @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามเดือนและปี</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">เดือน:</label>
                                        <select name="month" class="form-control">
                                            <option value="">เลือกเดือน</option>
                                            <option value="1">มกราคม</option>
                                            <option value="2">กุมภาพันธ์</option>
                                            <option value="3">มีนาคม</option>
                                            <option value="4">เมษายน</option>
                                            <option value="5">พฤษภาคม</option>
                                            <option value="6">มิถุนายน</option>
                                            <option value="7">กรกฎาคม</option>
                                            <option value="8">สิงหาคม</option>
                                            <option value="9">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11">พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">ปี:</label>
                                        <select name="year" class="form-control">
                                            <option value="">เลือกปี</option>
                                            @for ($i = date('Y'); $i >= 2020; $i--)
                                                <option value="{{ $i }}">{{ $i + 543 }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามเจ้าหน้าที่ผู้ยืนยัน</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">เจ้าหน้าที่:</label>
                                        <select name="staff_id" class="form-control select2">
                                            <option value="">เลือกเจ้าหน้าที่</option>
                                            @foreach($staffs as $staff)
                                                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info btn-lg">
                            <i class="fa fa-search"></i> ค้นหารายงาน
                        </button>
                        <button type="reset" class="btn btn-secondary btn-lg">
                            <i class="fa fa-refresh"></i> ล้างข้อมูล
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.body.footer')
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            language: 'th',
            todayBtn: true
        });

        $('.select2').select2({
            placeholder: "เลือกเจ้าหน้าที่",
            allowClear: true
        });

        // Validate form before submit
        $('#report-form').submit(function(e) {
            var startDate = $('input[name="start_date"]').val();
            var endDate = $('input[name="end_date"]').val();
            var month = $('select[name="month"]').val();
            var year = $('select[name="year"]').val();
            var staffId = $('select[name="staff_id"]').val();

            if (!startDate && !endDate && !month && !year && !staffId) {
                e.preventDefault();
                alert('กรุณาเลือกตัวกรองอย่างน้อย 1 รายการ');
                return false;
            }

            if ((startDate && !endDate) || (!startDate && endDate)) {
                e.preventDefault();
                alert('กรุณาเลือกทั้งวันที่เริ่มต้นและวันที่สิ้นสุด');
                return false;
            }

            if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
                e.preventDefault();
                alert('วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น');
                return false;
            }
        });
    });
</script>
@endsection
```

## File: resources/views/backend/staff/staff_edit.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
แก้ไขข้อมูลเจ้าหน้าที่
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-5">
            <div class="col-8 mx-auto mg-t-20 mg-xl-t-0">
                <div class="card pd-20 pd-sm-25">
                    <h6 class="card-body-title">แก้ไขข้อมูลเจ้าหน้าที่</h6>

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-10">
                                <form method="POST" action="{{ route('staff.update') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $staff->id }}">

                                    <div class="form-group">
                                        <label class="form-control-label">ชื่อเจ้าหน้าที่: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{ $staff->name }}" placeholder="ระบุชื่อเจ้าหน้าที่">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">ตำแหน่ง:</label>
                                        <input class="form-control" type="text" name="position" value="{{ $staff->position }}" placeholder="ระบุตำแหน่ง">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">แผนก/ฝ่าย:</label>
                                        <input class="form-control" type="text" name="department" value="{{ $staff->department }}" placeholder="ระบุแผนก/ฝ่าย">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">สถานะ: <span class="tx-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="active" {{ $staff->status == 'active' ? 'selected' : '' }}>ใช้งาน</option>
                                            <option value="inactive" {{ $staff->status == 'inactive' ? 'selected' : '' }}>ไม่ใช้งาน</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mg-t-30">
                                        <button type="submit" class="btn btn-info mg-r-5">
                                            <i class="fa fa-save"></i> บันทึกข้อมูล
                                        </button>
                                        <a href="{{ route('all.staff') }}" class="btn btn-secondary">
                                            <i class="fa fa-arrow-left"></i> กลับ
                                        </a>
                                    </div>
                                </form>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div><!-- form-layout -->
                </div><!-- card -->
            </div><!-- col-8 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->

    @include('admin.body.footer')
</div><!-- sl-mainpanel -->

@endsection
```

## File: resources/views/backend/staff/staff_view.blade.php
```php
@extends('admin.admin_master')
@section('admin')

@section('title')
จัดการข้อมูลเจ้าหน้าที่
@endsection

@php
    $month = date('F');
    $day = date('d');
    $year = date('Y');
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-5">
            <div class="col-xl-8">
                <div class="card overflow-hidden">
                    <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                        <div class="mg-b-20 mg-sm-b-0">
                            <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">รายการเจ้าหน้าที่</h6>
                            <span class="d-block tx-12">{{$month}} {{$day}}, {{$year}}</span>
                        </div>
                    </div><!-- card-header -->

                    <div class="card pd-20 pd-sm-20">
                        <!-- เพิ่มในส่วน header ของตาราง -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <select id="staff-filter" class="form-control">
                                    <option value="all">ทั้งหมด</option>
                                    <option value="active">ใช้งาน</option>
                                    <option value="inactive">ไม่ใช้งาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-40p">ชื่อเจ้าหน้าที่</th>
                                        <th class="wd-20p">ตำแหน่ง</th>
                                        <th class="wd-20p">แผนก</th>
                                        <th class="wd-10p">สถานะ</th>
                                        <th class="wd-10p">จำนวนการยืนยัน</th>
                                        <th class="wd-10p">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staffs as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->position ?? '-' }}</td>
                                        <td>{{ $item->department ?? '-' }}</td>
                                        <td>
                                            @if($item->status == 'active')
                                                <span class="badge badge-success">ใช้งาน</span>
                                            @else
                                                <span class="badge badge-danger">ไม่ใช้งาน</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->confirmations_count }}</td>
                                        <td>
                                            <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-info btn-sm" title="แก้ไขข้อมูล">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <a href="{{ route('staff.delete', $item->id) }}" class="btn btn-danger btn-sm" title="ลบข้อมูล"
                                               onclick="return confirm('ต้องการลบข้อมูลนี้ใช่หรือไม่?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div><!-- card -->
            </div><!-- col-8 -->

            <div class="col-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 pd-sm-25">
                    <h6 class="card-body-title">เพิ่มข้อมูลเจ้าหน้าที่</h6>

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('staff.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">ชื่อเจ้าหน้าที่: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" placeholder="ระบุชื่อเจ้าหน้าที่">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">ตำแหน่ง:</label>
                                        <input class="form-control" type="text" name="position" placeholder="ระบุตำแหน่ง">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">แผนก/ฝ่าย:</label>
                                        <input class="form-control" type="text" name="department" placeholder="ระบุแผนก/ฝ่าย">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">สถานะ: <span class="tx-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="active">ใช้งาน</option>
                                            <option value="inactive">ไม่ใช้งาน</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="text-xl-right">
                                        <button type="submit" class="btn btn-info mg-r-5">
                                            <i class="fa fa-plus-circle"></i> เพิ่มข้อมูล
                                        </button>
                                    </div>
                                </form>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div><!-- form-layout -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->

    @include('admin.body.footer')
</div><!-- sl-mainpanel -->

<script type="text/javascript">
    $(document).ready(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'ค้นหา...',
                sSearch: '',
                lengthMenu: '_MENU_ รายการ/หน้า',
                info: 'แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ',
                paginate: {
                    first: 'หน้าแรก',
                    last: 'หน้าสุดท้าย',
                    next: 'ถัดไป',
                    previous: 'ก่อนหน้า'
                }
            }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    });

    // เพิ่มฟังก์ชันค้นหาและกรองข้อมูล
    $('#staff-filter').on('change', function() {
        var status = $(this).val();
        var table = $('#datatable1').DataTable();

        if (status === 'all') {
            table.column(3).search('').draw();
        } else {
            table.column(3).search(status === 'active' ? 'ใช้งาน' : 'ไม่ใช้งาน').draw();
        }
    });

</script>

@endsection
```

## File: resources/views/dashboard.blade.php
```php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi..{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        

        This is just home page



    </div>
</x-app-layout>
```

## File: resources/views/frontend/body/footer.blade.php
```php
<footer class="sl-footer mg-t-20">
    <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2021. หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</div>
        <div>Powered by SRU Library. <a href="https://sru.ac.th/privacy-policy/" target="_blank"> นโยบายความเป็นส่วนตัว(Privacy Policy) </a></div>
    </div>
    {{-- <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Share:</span>
        <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
        <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
    </div> --}}
</footer>
```

## File: resources/views/frontend/body/header.blade.php
```php
<style>
    /* Notification Styles */
    .notification-dropdown {
        min-width: 350px;
        padding: 0;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
    }

    .notification-header {
        background-color: #0866C6;
        color: white;
        padding: 15px 20px;
        border-radius: 4px 4px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .notification-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        margin-right: 15px;
    }

    .notification-badge {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #dc3545;
        color: white;
        border-radius: 50%;
        min-width: 18px;
        height: 18px;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .notification-item {
        padding: 12px 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .notification-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }

    .notification-item.unread {
        background-color: #f0f8ff;
        border-left: 4px solid #0866C6;
    }

    .notification-content {
        display: flex;
        align-items: center;
    }

    .notification-body {
        flex: 1;
    }

    .notification-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .notification-meta {
        font-size: 12px;
        color: #95a5a6;
    }

    .notification-footer {
        padding: 10px 20px;
        text-align: center;
        border-top: 1px solid #f0f0f0;
        background-color: #f8f9fa;
    }

    .view-all-link {
        color: #0866C6;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .view-all-link:hover {
        color: #064785;
    }
</style>

<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
    </div>

    <div class="sl-header-right">
        <nav class="nav">
            @auth('admin')
            <div class="dropdown">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    <span class="notification-badge" id="notification-count" style="display: none;">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <!-- Notification Header -->
                    <div class="notification-header">
                        <div class="d-flex align-items-center">
                            <div class="notification-icon">
                                <i class="icon ion-ios-bell-outline tx-18"></i>
                            </div>
                            <div>
                                <h6 class="tx-14 mg-b-0">การแจ้งเตือน</h6>
                                <span class="tx-12" id="unread-count"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Notification List -->
                    <div class="notification-list" id="notification-list">
                        <!-- Notifications will be dynamically inserted here -->
                    </div>

                    <!-- Notification Footer -->
                    <div class="notification-footer">
                        <a href="{{ route('notifications.index') }}" class="view-all-link" style="color: #333;">
                            <i class="fa fa-list-ul mg-r-5"></i>
                            ดูรายการทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            @endauth

            <div class="navicon-right">
                <a href="{{ route('admin.login') }}" class="pos-relative">
                    <i class="icon ion-ios-locked-outline"></i>
                </a>
            </div>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notificationList = document.getElementById('notification-list');
        const notificationCount = document.getElementById('notification-count');
        const unreadCount = document.getElementById('unread-count');

        function updateNotificationUI(notifications) {
            // Update badge and counter
            const unreadNotifications = notifications.filter(n => !n.is_read);

            if (unreadNotifications.length > 0) {
                notificationCount.style.display = 'flex';
                notificationCount.textContent = unreadNotifications.length;
                unreadCount.textContent = `${unreadNotifications.length} การแจ้งเตือนใหม่`;
            } else {
                notificationCount.style.display = 'none';
                unreadCount.textContent = 'ไม่มีการแจ้งเตือนใหม่';
            }

            // Update notification list
            notificationList.innerHTML = notifications.length ?
                notifications.map(notification => `
                <div class="notification-item ${notification.is_read ? '' : 'unread'}">
                    <a href="/notifications/${notification.id}/detail" class="notification-content">
                        <div class="notification-icon">
                            <i class="icon ion-document-text tx-primary"></i>
                        </div>
                        <div class="notification-body">
                            <div class="notification-title">
                                ${notification.message}
                            </div>
                            <div class="notification-meta">
                                <i class="icon ion-clock mg-r-5"></i>
                                ${moment(notification.created_at).fromNow()}
                            </div>
                        </div>
                    </a>
                </div>
            `).join('') :
                `
                <div class="pd-y-30 tx-center">
                    <i class="icon ion-ios-bell-outline tx-48 tx-gray-300 d-block mg-b-15"></i>
                    <p class="tx-gray-500 mg-b-0">ไม่มีการแจ้งเตือน</p>
                </div>
            `;
        }

        // Load initial notifications
        function loadNotifications() {
            fetch('/notifications/unread')
                .then(response => response.json())
                .then(notifications => {
                    updateNotificationUI(notifications);
                });
        }

        // Initialize Pusher
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        // Subscribe to orders channel
        const channel = pusher.subscribe('orders');

        // Listen for new order events
        channel.bind('new-order', function(data) {
            // แสดงการแจ้งเตือนบนเบราว์เซอร์
            requestAndShowNotification(
                data.notification.title,
                data.notification.message
            );

            // อัพเดทการแจ้งเตือน - โหลดข้อมูลใหม่
            loadNotifications();

            // แสดง Toast notification
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'info',
                title: data.notification.message,
                showConfirmButton: false,
                timer: 30000
            });
        });

        // Load notifications on page load
        loadNotifications();

        // Refresh notifications periodically (every 30 seconds)
        setInterval(loadNotifications, 30000);

        function playNotificationSound() {
            const audio = new Audio('/path/to/notification-sound.mp3');
            audio.play().catch(error => console.log('Audio play failed:', error));
        }

        // ฟังก์ชันขอสิทธิ์และแสดงการแจ้งเตือน
        function requestAndShowNotification(title, message) {
            // ตรวจสอบว่าเบราว์เซอร์รองรับการแจ้งเตือนหรือไม่
            if (!("Notification" in window)) {
                alert("เบราว์เซอร์นี้ไม่รองรับการแจ้งเตือน");
                return;
            }

            // ถ้าได้รับอนุญาตแล้ว แสดงการแจ้งเตือนได้เลย
            if (Notification.permission === "granted") {
                createNotification(title, message);
            }
            // ถ้ายังไม่เคยขอสิทธิ์
            else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function (permission) {
                    if (permission === "granted") {
                        createNotification(title, message);
                    }
                });
            }
        }

        // ฟังก์ชันสร้างการแจ้งเตือน
        function createNotification(title, message) {
            const notification = new Notification(title, {
                body: message,
                icon: '/path/to/icon.png', // เพิ่ม icon ตามต้องการ
            });

            // เมื่อคลิกที่การแจ้งเตือน
            notification.onclick = function(event) {
                event.preventDefault();
                window.focus();
                this.close();
            };

            // ปิดการแจ้งเตือนอัตโนมัติหลัง 5 วินาที
            setTimeout(() => {
                notification.close();
            }, 50000);
        }
    });
</script>
```

## File: resources/views/frontend/body/sidebar.blade.php
```php
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // dd($route);
@endphp

<div class="sl-logo"><a href="{{ url('home') }}"><i class="icon ion-clipboard"></i> ระบบยืมออนไลน์ </a></div>
    <div class="sl-sideleft">

      <div class="sl-sideleft-menu mg-t-6">

        <a href="{{ url('home') }}" class="sl-menu-link {{ ($route == 'home.index') ? 'active' : '' }} ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">แบบฟอร์มการยืมออนไลน์</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://opac.sru.ac.th/member/Login.aspx/" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">บริการยืมต่อหนังสือ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('order.view') }}" class="sl-menu-link {{ ($route == 'order.view') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">ตรวจสอบรายการ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://opac.sru.ac.th" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-laptop tx-22"></i>
            <span class="menu-item-label">สืบค้นข้อมูลทรัพยากร</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="" data-toggle="modal" data-target="#modaldemo1" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-information-circled tx-22"></i>
            <span class="menu-item-label">เงื่อนไขการใช้บริการ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="https://sru.ac.th/privacy-policy/" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-locked-outline tx-22"></i>
            <span class="menu-item-label">นโยบายความเป็นส่วนตัว</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
```

## File: resources/views/frontend/index.blade.php
```php
@extends('frontend.main_master')
@section('content')
@section('title')
    ระบบยืมออนไลน์ Information Checkout Online
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75);
        z-index: 10000;
    }
</style>

<div class="sl-mainpanel">
    {{-- <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Forms</a>
      <span class="breadcrumb-item active">Form Layouts</span>
    </nav> --}}

    <div class="sl-pagebody">

        <div class="sl-page-title">
            <h5>Information Checkout Online <b style="color:red">(สำหรับยืมหนังสือแบบออนไลน์เท่านั้น <u
                        style="font-size:30px">ไม่สามารถใช้งานยืมต่อหนังสือได้!</u>)</b></h5>
            <p> for COVID-19 Situation.</p>
        </div><!-- sl-page-title -->


        {{-- <div class="row mg-t-5">
        <div class="col">
          <div class="text-xl-right">
            <button name="add" id="add" class="btn btn-primary mg-r-5">
              <i class="icon ion-plus-circled"> </i>
                Add Data
            </button>
          </div>
        </div> --}}

        @if (Session::has('success'))
            <div class="alert alert-success">

                {{-- <p>{{ Session::get('success') }}</p> --}}

                <div class="alert alert-success" role="alert">
                    <div class="d-sm-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                        <div class="mg-t-0 mg-sm-t-0">
                            <h5 class="mg-b-2 tx-success">รายการยืมออนไลน์ สำเร็จ</h5>
                            <p class="mg-b-0 tx-gray">ระบบได้ส่งรายการยืมออนไลน์ไปยังเจ้าหน้าที่เรียบร้อยแล้ว
                                โปรดตรวจสอบรายการยืมได้จากอีเมล์
                                หากไม่พบอีเมล์ โปรดตรวจสอบเมนูจดหมายขยะ (Junk Mail) ตามที่สมาชิกได้ยืนยันในระบบ</p>
                        </div>
                    </div><!-- d-flex -->
                </div>

            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <div class="d-sm-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-close alert-icon tx-52 mg-r-20 tx-danger"></i>
                    <div class="mg-t-0 mg-sm-t-0">
                        <h5 class="mg-b-2 tx-danger">กรุณากรอกข้อมูลรายการตามแบบฟอร์มที่กำหนดให้สมบูรณ์</h5>
                        <p class="mg-b-0 tx-gray">กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>
                    </div>
                </div><!-- d-flex -->
            </div>

            {{-- <div class="alert alert-danger" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div> --}}
        @endif

        {{-- <form method="POST" action="{{ route('order.store') }}">
        @csrf --}}

        <form action="{{ route('order.store') }}" method="POST">
            @csrf

            <div class="card pd-20 pd-sm-40 mg-t-10">

                <h6 class="card-body-title">ข้อมูลผู้ขอใช้บริการ (Patron Informations)</h6>
                <p class="mg-b-20 mg-sm-b-30">
                    ข้อมูลผู้ใช้บริการนี้คือข้อมูลที่ทางห้องสมุดได้ทำการบันทึกจะใช้สำหรับระบบบริการยืมออนไลน์นี้เท่านั้น
                </p>

                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">รหัสสมาชิก (Student ID & ID-Card): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="patronid" placeholder="18401xxxxxxxx"
                                    value="{{ old('patronid') }}">
                                @error('patronid')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">ชื่อ (Firstname): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="firstname"
                                    placeholder="Enter firstname" value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">นามสกุล (Lastname): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="lastname" placeholder="Enter lastname"
                                    value="{{ old('lastname') }}">
                                @error('lastname')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">เบอร์โทรฯ (Phone): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" placeholder="088xxxxxxx"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email"
                                    placeholder="student@sru.ac.th" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">หน่วยงาน/คณะ: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="faculty_id">
                                    <option value="" selected="" disabled="">เลือก: หน่วยงาน/คณะ</option>

                                    @foreach ($faculties as $item)
                                        <option value="{{ $item->id }}">{{ $item->faculty_name_th }}</option>
                                    @endforeach

                                </select>
                                @error('faculty_id')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">ประเภทสมาชิก: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="patrontype_id">
                                    <option value="" selected="" disabled="">เลือก: ประเภทสมาชิก</option>

                                    @foreach ($patrontype as $item)
                                        <option value="{{ $item->id }}">{{ $item->patron_type_name }}</option>
                                    @endforeach

                                </select>
                                @error('patrontype_id')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div><!-- col-4 -->

                    </div><!-- row -->

                    {{-- <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Submit Form</button>
            <button class="btn btn-secondary">Cancel</button>
          </div><!-- form-layout-footer --> --}}

                </div><!-- form-layout -->
            </div><!-- card -->



            {{-- Add information data --}}



            <div class="card pd-20 pd-sm-30 mg-t-40">

                <div class="card pd-20 mg-t-0 bd rounded">

                    <div class="mg-t-0"><a href="#"
                            class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10">
                            <div> 1 </div>
                        </a></div>

                    <div class="row mg-t-20">
                        <div class="col">
                            <div class="text-xl-right">
                                <button type="button" name="add" id="dynamic-ar" class="btn btn-info"><i
                                        class="icon ion-plus-circled"> </i>เพิ่มรายการยืม...</button>
                                {{-- #Button add item --}}
                                {{-- <a href="#section" name="add" id="dynamic-ar" class="btn btn-info"><i class="icon ion-plus-circled"> </i>เพิ่มรายการยืม...</a> --}}
                            </div>
                        </div><!-- col end -->
                    </div> <!-- row end -->

                    <h6 class="card-body-title mg-t-20">รายละเอียดทรัพยากร</h6>
                    <p class="mg-b-20 mg-sm-b-30">ข้อมูลรายละเอียดสำหรับการยืมทรัพยากร
                        กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>


                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr style="background: white">
                            <td class="card pd-20 mg-t-10">

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group form-group-lg">
                                            <label class="form-control-label">ชื่อเรื่อง (Title): <span
                                                    class="tx-danger">*</span></label>
                                            <div class="mg-t-10 mg-sm-t-0">
                                                <input type="text" name="addMoreInputFields[1][subject]"
                                                    placeholder="Enter title" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mg-t-20">
                                    <div class="col-lg-8">
                                        <div class="form-group form-group-lg">
                                            <label class="form-control-label">ผู้แต่ง (Author): <span
                                                    class="tx-danger">*</span></label>
                                            <div class="mg-t-10 mg-sm-t-0">
                                                <input type="text" name="addMoreInputFields[1][author]"
                                                    placeholder="Enter author" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mg-t-20">
                                    <div class="col-lg-8">
                                        <div class="form-group form-group-lg">
                                            <label class="form-control-label">เลขเรียกหนังสือ (Call Number): <span
                                                    class="tx-danger">*</span></label>
                                            <div class="mg-t-10 mg-sm-t-0">
                                                <input type="text" name="addMoreInputFields[1][callnum]"
                                                    placeholder="Enter call number" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            {{-- <td>
                      <div class="card pd-20 pd-sm-40 mg-t-0">
                        <button type="button" name="add" id="dynamic-ar" class="btn btn-info"><i class="icon ion-plus-circled"> </i>เพิ่มรายการยืม...</button>
                      </div>
                    </td> --}}
                        </tr>
                    </table>
                </div>

                <div class="row mg-t-30">
                    <div class="col">
                        <div class="text-xl-left">
                            <button type="submit" class="btn btn-teal btn-block" id="closeModel"><i class="fa fa-download mg-r-10"></i>ส่งข้อมูลรายการยืม</button>
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </div>
                    </div><!-- col end -->
                </div> <!-- row end -->

        </form>

    </div><!-- sl-pagebody -->
    @include('frontend.body.footer')
</div><!-- sl-mainpanel -->

<div id="loader" class="loader-overlay">
    <div class="loader-content">
        <div class="spinner"></div>
        <div class="percentage-container">
            <span id="percentage-counter">0%</span>
        </div>
        <p class="loading-text">กำลังตรวจสอบ...</p>
    </div>
</div>


<!-- BASIC MODAL -->
<div id="modaldemo1" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ
                    แจ้งวันเวลาให้บริการใหม่สำหรับระบบยืมออนไลน์</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20">เงื่อนไขการใช้บริการ</h4>
                <p class="mg-b-5" style="color:red">1. ผู้ใช้บริการสามารถส่งคำขอยืมหนังสือได้ใน <b><u>วันจันทร์ ถึง
                            วันศุกร์ เวลา 08.30 น. - 16.00 น.</u></b></p>
                <br>
                <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
                <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a
                        href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary">
                        คลิกที่นี่</a></p>
                <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
                <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
                <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
            </div>
            {{-- <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary"> คลิกที่นี่</a></p>
            <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
            <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
            <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
          </div> --}}
            <div class="mb-3">
                <img width="650px"
                    src="https://library.sru.ac.th/wp-content/uploads/sites/29/2022/09/notics-cir-online.png"
                    alt="">
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
                <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i
                        class="icon ion-close"> </i> ปิดหน้าต่างนี้</button>
            </div>
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->


<!-- NOTICS MODAL -->
{{-- <div id="modaldemo1" class="modal fade">
          <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
              <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ  ปิดบริการระบบยืมออนไลน์ (ชั่วคราว) เพื่อปรับปรุงระบบ </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20">สามารถใช้บริการได้วันพุธที่ 11 มกราคม 2566</h4>
                <h4 class="lh-3 mg-b-20">ขออภัยในความไม่สะดวกในครั้งนี้</h4>
              </div>
              <div class="modal-footer"> --}}
{{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
{{-- <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button> --}}
{{-- </div>
            </div>
          </div>
          <!-- modal-dialog -->
        </div>
        <!-- modal --> --}}



<!-- BASIC MODAL ปิดชั่วคราว -->
{{-- <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ แจ้งปิดบริการเนื่องในเทศกาลสงกรานต์</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ประกาศ แจ้งปิดบริการเนื่องในเทศกาลสงกรานต์</h4>
            <p class="mg-b-5"><h5>📍วันที่ 12 เม.ย. 2565 : บุคลากรเข้าร่วมกิจกรรมของมหาวิทยาลัยฯ</h5></p>
            <p class="mg-b-5"><h5>📍วันที่ 13 - 17 เม.ย. 2565 : หยุดเทศกาลสงกรานต์</h5></p>
            <p class="mg-b-5"><h5>หอสมุด อภัยในความไม่สะดวกมา ณ ที่นี้</h5></p>
          </div>
          <hr>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">การกลับมาให้บริการ</h4>
            <p class="mg-b-5"><h5>ทางหอสมุดจะกลับมาเปิดให้บริการรวมถึงระบบยืมออนไลน์ใหม่</h5></p>
            <p class="mg-b-5"><h5>ในวันจันทร์ที่ 18 เม.ย. 2565</h5></p>
          </div> --}}
{{-- <div class="modal-footer"> --}}
{{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
{{-- <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div><!-- modal-dialog --> --}}
{{-- </div><!-- modal --> --}}



<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append(

                '<tr style="background: white">' +
                '<td class="card pd-20 mg-t-5">' +
                '<hr>' +

                '<div id="section" class="mg-t-0"><a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-20"><div> ' +
                i + ' </div></a></div>' +
                '<h6 class="card-body-title">รายละเอียดทรัพยากร</h6>' +
                '<p class="mg-b-20 mg-sm-b-30">ข้อมูลรายละเอียดสำหรับการยืมทรัพยากร กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>' +

                '<div class="row mg-t-10">' +
                '<div class="col">' +
                '<div class="text-xl-right">' +
                '<button type="button" class="btn btn-danger remove-input-field"><i class="icon ion-close"> </i>  ลบรายการ</button>' +
                '</div>' +
                '</div>' +
                '</div>' +


                '<div class="row mg-t-20">' +
                '<div class="col-lg-8">' +
                '<div class="form-group form-group-lg">' +
                '<label class="form-control-label">ชื่อเรื่อง (Title): <span class="tx-danger">*</span></label>' +
                '<div class="mg-t-10 mg-sm-t-0">' +
                '<input type="text" name="addMoreInputFields[' + i +
                '][subject]" placeholder="Enter title" class="form-control" />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="row mg-t-10">' +
                '<div class="col-lg-8">' +
                '<div class="form-group form-group-lg">' +
                '<label class="form-control-label">ผู้แต่ง (Author): <span class="tx-danger">*</span></label>' +
                '<div class="mg-t-10 mg-sm-t-0">' +
                '<input type="text" name="addMoreInputFields[' + i +
                '][author]" placeholder="Enter author" class="form-control" />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="row mg-t-10">' +
                '<div class="col-lg-8">' +
                '<div class="form-group form-group-lg">' +
                '<label class="form-control-label">เลขเรียกหนังสือ (Call Number): <span class="tx-danger">*</span></label>' +
                '<div class="mg-t-10 mg-sm-t-0">' +
                '<input type="text" name="addMoreInputFields[' + i +
                '][callnum]" placeholder="Enter call number" class="form-control" />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +

                // '<td>'+
                //   '<div class="card pd-20 pd-sm-40 mg-t-10">'+
                //     '<button type="button" class="btn btn-danger remove-input-field"><i class="icon ion-close"> </i>Delete</button>'+
                //   '</div>'+
                // '</td>'+

                '</td>' +
                // '<td>'+
                //   '<button type="button" class="btn btn-outline-danger remove-input-field">Delete</button>'+
                // '</td>'+
                '</tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
            --i;
        });

    // ปรับปรุงการส่ง form
    $('form').submit(function(e) {
        e.preventDefault();
        var spinner = $('#loader');
        var form = $(this);

        // Start the spinner with percentage counter immediately
        loadSpinner();

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                spinner.hide();

                if(response.success) {
                    // แสดง Success Alert
                    Swal.fire({
                        title: 'บันทึกสำเร็จ!',
                        text: 'รายการยืมถูกบันทึกเรียบร้อยแล้ว',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reset form
                            form[0].reset();

                            // Reset select2
                            $('.select2').val('').trigger('change');

                            // Reset dynamic fields
                            $("#dynamicAddRemove tr:not(:first)").remove();
                            $("#dynamicAddRemove tr:first input").val('');
                            i = 1;

                            // Scroll to top smoothly
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });

                            // Redirect to confirmed order page
                            window.location.href = "{{ route('order.view') }}"

                            // Show success message
                            showSuccessMessage();
                        }
                    });
                }
            },
            error: function(xhr) {
                spinner.hide();

                // Handle validation errors
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '<ul class="list-unstyled">';

                    Object.keys(errors).forEach(function(key) {
                        errorMessage += `<li><i class="fa fa-times-circle text-danger"></i> ${errors[key][0]}</li>`;
                    });

                    errorMessage += '</ul>';

                    Swal.fire({
                        title: 'เกิดข้อผิดพลาด!',
                        html: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                } else {
                    Swal.fire({
                        title: 'เกิดข้อผิดพลาด!',
                        text: 'ไม่สามารถบันทึกข้อมูลได้ กรุณาลองใหม่อีกครั้ง',
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                }
            }
        });
    });

    // Function to show success message
    function showSuccessMessage() {
        const successHtml = `
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="d-sm-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                    <div class="mg-t-0 mg-sm-t-0">
                        <h5 class="mg-b-2 tx-success">รายการยืมออนไลน์ สำเร็จ</h5>
                        <p class="mg-b-0 tx-gray">
                            ระบบได้ส่งรายการยืมออนไลน์ไปยังเจ้าหน้าที่เรียบร้อยแล้ว
                            โปรดตรวจสอบรายการยืมได้จากอีเมล์
                        </p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `;

        $('.sl-page-title').after(successHtml);

        // Auto hide after 5 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);
    }

    // Loading spinner with percentage counter
    function loadSpinner() {
        $('#loader').show();
        let percentage = 0;
        const percentageCounter = $('#percentage-counter');
        percentageCounter.text('0%');

        // Clear any existing interval
        if (window.percentageInterval) {
            clearInterval(window.percentageInterval);
        }

        // Set up interval to increase percentage
        window.percentageInterval = setInterval(function() {
            // Increase percentage
            percentage += 1;

            // Update the counter text
            percentageCounter.text(percentage + '%');

            // If we've reached 100%, clear the interval
            if (percentage >= 100) {
                clearInterval(window.percentageInterval);
            }
        }, 50); // Update every 50ms for a total of ~5 seconds to reach 100%
    }

    // To hide the loader
    function hideSpinner() {
        $('#loader').hide();
        // Clear interval if it exists
        if (window.percentageInterval) {
            clearInterval(window.percentageInterval);
        }
    }

    // Close alert
    $(document).on('click', '.alert .close', function() {
        $(this).closest('.alert').fadeOut('slow', function() {
            $(this).remove();
        });
    });

    // Initialize Select2
    $('.select2').select2({
        placeholder: "กรุณาเลือก",
        allowClear: true
    });
});
</script>

<!-- Add required CSS -->
<style>
    .loader-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader-content {
        text-align: center;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 20px;
    }

    .percentage-container {
        margin: 10px auto;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    #percentage-counter {
        display: inline-block;
        min-width: 60px;
        text-align: center;
    }

    .loading-text {
        color: #fff;
        font-size: 18px;
        font-weight: bold;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .select2-container {
        width: 100% !important;
    }

    .alert {
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .alert-success {
        border-left: 4px solid #23bf08;
    }

    .alert-error {
        border-left: 4px solid #dc3545;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }
    </style>


<!-- เพิ่ม SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
```

## File: resources/views/frontend/main_master.blade.php
```php
<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <meta name="robots" content="none">
    <meta name="googlebot" content="none"> --}}
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SRU Checkout Online">
    <meta name="twitter:description" content="SRU Checkout Online">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="SRU Checkout Online">
    <meta property="og:description" content="SRU Checkout Online">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="SRU Checkout Online">
    <meta name="author" content="ThemePixels">

    <title> @yield('title') </title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/SpinKit/spinkit.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('frontend.body.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->
    @include('frontend.body.header')
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    @yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

    @php
      $prefix = Request::route()->getPrefix();
      $route = Route::current()->getName();
    @endphp

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>



    <!-- BASIC MODAL -->
    {{-- <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้งานเบื้องต้น</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">เงื่อนไขการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการที่ส่งคำขอยืมหนังสือ เวลา 7.30 - 12.00 น. สามารถรับหนังสือได้ในช่วงบ่ายในวันนั้นๆ</p>
            <p class="mg-b-5">2 .ผู้ใช้บริการที่ส่งคำขอยืมหนังสือ หลังเวลา 12.00 น. สามารถมารับหนังสือได้ในวันถัดไป</p>
          </div>
          <hr>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary">>> OPAC <<</a></p>
            <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
            <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
            <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal --> --}}



    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      })
    </script>

    @if ($route == 'order.view')

    @else
      <script type="text/javascript">
        $(window).load(function() {
            $('#modaldemo1').modal('show');
        });
      </script>
    @endif

    <!-- Pusher -->
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Pusher
        const pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
            cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}'
        });

        // Subscribe to channel
        const channel = pusher.subscribe('orders');

        // Keep track of notifications
        let notifications = [];

        // Listen for events
        channel.bind('new-order', function(data) {
            // Add to notifications array
            notifications.push(data.order);
            updateNotificationUI();
        });

        function updateNotificationUI() {
            const badge = document.getElementById('notification-badge');
            const counter = document.getElementById('notification-count');
            const list = document.getElementById('notification-list');

            // Update badge and counter
            if (notifications.length > 0) {
                badge.classList.remove('d-none');
                counter.textContent = `${notifications.length} การแจ้งเตือนใหม่`;
            }

            // Update list
            list.innerHTML = notifications.map(order => `
                <li class="notification-item" data-order-id="${order.id}">
                    <a href="/home/orders/list/${order.id}" class="media-list-link">
                        <div class="media pd-x-20 pd-y-15">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">
                                    <strong class="tx-medium tx-gray-800">
                                        ${order.firstname} ${order.lastname}
                                    </strong>
                                    <span>ได้ส่งรายการยืมใหม่</span>
                                </p>
                                <span class="tx-12">เมื่อสักครู่</span>
                                <p class="tx-12 mg-t-5">คณะ: ${order.faculty.faculty_name_th}</p>
                            </div>
                        </div>
                    </a>
                </li>
            `).join('');
        }

        // Clear notifications when dropdown is closed
        $('.dropdown').on('hidden.bs.dropdown', function() {
            notifications = [];
            updateNotificationUI();
        });
    });

        // ฟังก์ชันขอสิทธิ์และแสดงการแจ้งเตือน
        function requestAndShowNotification(title, message) {
            // ตรวจสอบว่าเบราว์เซอร์รองรับการแจ้งเตือนหรือไม่
            if (!("Notification" in window)) {
                alert("เบราว์เซอร์นี้ไม่รองรับการแจ้งเตือน");
                return;
            }

            // ถ้าได้รับอนุญาตแล้ว แสดงการแจ้งเตือนได้เลย
            if (Notification.permission === "granted") {
                createNotification(title, message);
            }
            // ถ้ายังไม่เคยขอสิทธิ์
            else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function (permission) {
                    if (permission === "granted") {
                        createNotification(title, message);
                    }
                });
            }
        }

        // ฟังก์ชันสร้างการแจ้งเตือน
        function createNotification(title, message) {
            const notification = new Notification(title, {
                body: message,
                icon: '/path/to/icon.png', // เพิ่ม icon ตามต้องการ
            });

            // เมื่อคลิกที่การแจ้งเตือน
            notification.onclick = function(event) {
                event.preventDefault();
                window.focus();
                this.close();
            };

            // ปิดการแจ้งเตือนอัตโนมัติหลัง 5 วินาที
            setTimeout(() => {
                notification.close();
            }, 50000);
        }
    </script>

  </body>
</html>
```

## File: resources/views/frontend/orders/confirmed_order.blade.php
```php
@extends('frontend.main_master')
@section('content')

@section('title')
รายงานการยืมออนไลน์
@endsection

@php
    $month = date('F');
    $day = date('d');
    $year = date('Y');
    $hour = date('H');
    $seconds = date('');
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-20">
            <h6 class="card-body-title">ข้อมูลรายการยืมทรัพยากรออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">สามารถตรวจสอบรายละเอียดการยืมได้ตามข้อมูลด้านล่างนี้</p>

            <div class="table-responsive">
                <table id="datatable1" class="table display responsive">
                <thead>
                  <tr role="row">
                      <th class="wd-15p sorting_desc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 25%;" aria-sort="descending" aria-label="First name: activate to sort column descending">วันที่</th>
                      <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 25%;" aria-label="Start date: activate to sort column descending">ชื่อ-สกุล</th>
                      <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 25%;" aria-label="E-mail: activate to sort column descending">สถานะ</th>
                      <th class="wd-10p sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 25%;" aria-label="E-mail: activate to sort column descending">รายการยืมออนไลน์</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $item)
                    <tr role="row" class="odd">
                        <td tabindex="0" data-order="1" class="sorting_1"> <a href="{{ route('order-list-view',$item->id) }}" title="List checkout detail"> {{ Carbon\Carbon::parse($item->order_date)->thaidate('j M y') }} / {{ Carbon\Carbon::parse($item->created_at)->thaidate('H:i') }} น. </a></td>
                        <td data-order="3"> <a href="{{ route('order-list-view',$item->id) }}" title="List checkout detail"> {{ $item->firstname }} {{$item->lastname}} </a></td>
                        <td data-order="5">
                            @if ($item->status == 'success')
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-checkmark alert-icon tx-20 tx-success mg-r-5"></i>
                                    <span class="tx-success">สำเร็จ</span>
                                </div>
                            @else
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-time alert-icon tx-20 tx-warning mg-r-5"></i>
                                    <span class="tx-warning">รอยืนยัน</span>
                                </div>
                            @endif
                        </td>
                        @php
                          $numOrderItem = App\Models\OrderItem::with('order')->where('order_id',$item->id)->count('order_id');
                        @endphp
                        <td>
                            <a href="{{ route('order-list-view',$item->id) }}" class="btn btn-primary btn-sm" title="List checkout detail">
                            <i class="icon ion-document-text"></i> รายการ <span class="badge badge-danger">{{ $numOrderItem }}</span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div>
    </div><!-- sl-pagebody -->

    <!-- Footer -->
    @include('frontend.body.footer')
    <!-- End footer -->

  </div><!-- sl-mainpanel -->

  <script type="text/javascript">
    $(document).ready(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        ordering: true,
        order: [[ 0, "desc" ]],
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>

@endsection
```

## File: resources/views/frontend/orders/confirmed_order_list.blade.php
```php
@extends('frontend.main_master')
@section('content')

@section('title')
    รายงานการยืมออนไลน์
@endsection


@php
    $month = date('F');
    $day = date('d');
    $year = date('Y');
    $hour = date('H');
    $seconds = date('');

    $patron_name = App\Models\OrderItem::where('order_id', $patronid)->get();
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-20">
            <h6 class="card-body-title">ข้อมูลรายการยืมทรัพยากรออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">สามารถตรวจสอบรายละเอียดการยืมได้ตามข้อมูลด้านล่างนี้</p>

            <div class="table-wrapper">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="pd-20 bg-gray-200 mb-4">
                        <h5 class="tx-dark">ข้อมูลผู้ยืม</h5>
                        @foreach ($orderItem as $item)
                            @php
                                $order = $item->order;
                                $faculty = DB::table('faculties')->where('id', $order->faculty_id)->first();
                                $patronType = DB::table('patron_types')->where('id', $order->patron_type_id)->first();
                                break;
                            @endphp
                        @endforeach

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">เลขที่ใบยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->invoice_no ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ชื่อ-นามสกุล:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->firstname ?? '' }} {{ $order->lastname ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">รหัสสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->patronid ?? '-' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">คณะ/หน่วยงาน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $faculty->faculty_name_th ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ประเภทสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $patronType->patron_type_name ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($order->status == 'success')
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-warning">รอยืนยัน</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover">
                        <thead class="bg-info">
                            <tr>
                                <th class="text-center text-white">ลำดับ</th>
                                <th class="text-white">ชื่อเรื่อง</th>
                                <th class="text-white">ผู้แต่ง</th>
                                <th class="text-white">เลขเรียกหนังสือ</th>
                                <th class="text-center text-white">สถานะ</th>
                                <th class="text-white">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($orderItem as $item)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->callnum }}</td>
                                    <td class="text-center">
                                        @if (isset($item->status))
                                            @if ($item->status == 'available')
                                                <span class="badge badge-success">มีให้ยืม</span>
                                            @elseif ($item->status == 'unavailable')
                                                <span class="badge badge-danger">ไม่มีให้ยืม</span>
                                            @elseif ($item->status == 'pending')
                                                <span class="badge badge-warning">กำลังตรวจสอบทรัพยากร</span>
                                            @endif
                                        @else
                                            <span class="badge badge-secondary">รอยืนยัน</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->note ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-layout-footer mg-t-10">
                    <div class="text-center">
                        <a href="{{ route('order.view') }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ</a>

                        @if ($order && $order->status != 'success')
                            @php
                                $notification = App\Models\Notification::where('order_id', $patronid)
                                    ->where('is_read', false)
                                    ->first();
                            @endphp
                            @if ($notification)
                                <a href="{{ route('notifications.detail', $notification->id) }}"
                                    class="btn btn-primary ml-2">
                                    <i class="fa fa-check-circle"></i> ยืนยันรายการ
                                </a>
                            @endif
                        @endif
                    </div>
                </div><!-- form-layout-footer -->
            </div><!-- table-wrapper -->
        </div> <!-- card -->
    </div><!-- sl-pagebody -->

    <!-- Footer -->
    @include('frontend.body.footer')
    <!-- End footer -->

</div><!-- sl-mainpanel -->

<style>
    .badge {
        padding: 8px 12px;
        font-size: 12px;
        border-radius: 4px;
    }

    .badge-success {
        background-color: #28a745;
    }

    .badge-danger {
        background-color: #dc3545;
    }

    .badge-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .badge-secondary {
        background-color: #6c757d;
    }

    .table th {
        font-weight: 600;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>

@endsection
```

## File: resources/views/frontend/under_construction/closed.blade.php
```php
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปิดปรับปรุงระบบยืมออนไลน์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Micro Animation Keyframes */
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); opacity: 1; }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes cursorGlow {
            0% { box-shadow: 0 0 5px rgba(99, 102, 241, 0.5); }
            50% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.8); }
            100% { box-shadow: 0 0 5px rgba(99, 102, 241, 0.5); }
        }

        @keyframes bgShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-bounce-in {
            animation: bounceIn 0.6s ease-out;
        }

        .animate-pulse:hover {
            animation: pulse 0.4s ease-in-out;
        }

        .bg-animated {
            background: linear-gradient(45deg, #e0e7ff, #f3e8ff, #e0f2fe, #f5f3ff);
            background-size: 400%;
            animation: bgShift 20s ease infinite;
        }

        /* Custom Cursor Animation */
        body {
            cursor: none; /* Hide default cursor */
        }

        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background: rgba(99, 102, 241, 0.7);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            animation: cursorGlow 1.5s ease-in-out infinite;
            z-index: 9999;
        }

        .custom-cursor.click {
            transform: translate(-50%, -50%) scale(0.5);
            background: rgba(168, 85, 247, 0.9);
            transition: transform 0.1s ease;
        }
    </style>
</head>
<body class="bg-animated flex items-center justify-center min-h-screen">
    <div class="custom-cursor" id="custom-cursor"></div>
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center animate-bounce-in">
        <div class="mb-6">
            <svg class="mx-auto h-16 w-16 text-yellow-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">ระบบยืมออนไลน์</h1>
        <p class="text-gray-600 mb-4">ขออภัยในความไม่สะดวก ขณะนี้ระบบยืมออนไลน์อยู่ระหว่างการปิดปรับปรุงชั่วคราว เพื่อพัฒนาและเพิ่มประสิทธิภาพการให้บริการ</p>
        <p class="text-gray-600 mb-6">กรุณาติดตามการแจ้งเตือนจากเรา หรือกลับมาใช้งานอีกครั้งในภายหลัง</p>
        <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 animate-pulse">กลับสู่หน้าหลัก</a>
        <div class="mt-6 text-sm text-gray-500">
            © {{ date('Y') }} ระบบยืมออนไลน์. หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี.
        </div>
    </div>
    <script>
        // Custom Cursor Animation
        const cursor = document.getElementById('custom-cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        document.addEventListener('mousedown', () => {
            cursor.classList.add('click');
        });

        document.addEventListener('mouseup', () => {
            cursor.classList.remove('click');
        });
    </script>
</body>
</html>
```

## File: resources/views/layouts/app.blade.php
```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
```

## File: resources/views/layouts/guest.blade.php
```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
```

## File: resources/views/mail/order_mail.blade.php
```php
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        /* CSS ที่มีอยู่เดิม */
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

        /* เพิ่ม CSS ใหม่ */
        body {
            background-color: #f8fafc;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #4a5568;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #718096;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .content {
                padding: 10px;
            }
        }
    </style>
</head>

<body
    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-text-size-adjust: none; background-color: #f8fafc; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">
    <div class="container">
        <div class="header">
            <h1>หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</h1>
        </div>
        <div class="content">
            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation"
                style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; width: 570px;">
                <tr>
                    <td class="content-cell"
                        style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; max-width: 100vw; padding: 32px;">
                        <p
                            style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">
                            มีรายการยืมออนไลน์ หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี
                        </p>
                        <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0"
                            role="presentation"
                            style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padding: 0; text-align: center; width: 100%;">
                            <tr>
                                <td align="center"
                                    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                        role="presentation"
                                        style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
                                        <tr>
                                            <td align="center"
                                                style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    role="presentation"
                                                    style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
                                                    <tr>
                                                        <td
                                                            style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';                                                         position: relative;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <h2>รายการยืมออนไลน์</h2>
                        <p>A Checkout List Circulation Online</p>

                        @php
                            $i = 1;
                            foreach ($order as $orders) {
                            }
                        @endphp
                <tr>
                    <td>Order No : {{ $orders['order']['invoice_no'] }}</td>
                </tr>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">ลำดับ.</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">ชื่อเรื่อง</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">ผู้แต่ง</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">เลขเรียกหนังสือ</th>
                    </tr>
                    @foreach ($order as $item)
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $i++ }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->subject }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->author }}</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->callnum }}</td>
                        </tr>
                    @endforeach
                </table>
                </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>© 2023 SRU Central Library. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
```

## File: resources/views/navigation-menu.blade.php
```php
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
```

## File: resources/views/notifications/detail.blade.php
```php
@extends('frontend.main_master')
@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="card pd-20 pd-sm-40">
                        <div class="card-header bg-primary">
                            <h6 class="card-title tx-white">รายละเอียดการแจ้งเตือน</h6>
                        </div>

                        <div class="card-body">
                            <div class="alert alert-info mb-4">
                                <h5><i class="fa fa-info-circle"></i> โปรดทราบ</h5>
                                <p class="mb-0">คุณจำเป็นต้องยืนยันรายการแจ้งเตือนนี้ มิฉะนั้นการแจ้งเตือนจะยังคงแสดงอยู่ในระบบ</p>
                            </div>

                            <div class="pd-20 bg-gray-200 mb-4">
                                <h5 class="tx-dark">รายละเอียดการแจ้งเตือน</h5>
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">วันที่แจ้งเตือน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->created_at->format('d/m/Y H:i:s') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ข้อความ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->message }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pd-20 bg-gray-200 mb-4">
                                <h5 class="tx-dark">รายละเอียดการยืม</h5>
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ชื่อ-นามสกุล:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->order->firstname }} {{ $notification->order->lastname }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">รหัสสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->order->patronid }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">คณะ/หน่วยงาน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ประเภทสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->order->patrontype->patron_type_name ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">จำนวนรายการยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->order->orderItems->count() }} รายการ</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะการยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($notification->order->status == 'success')
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-warning">รอยืนยัน</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- รายการทรัพยากรที่ยืม แสดงเป็นตาราง -->
                            <div class="card bd-0 mg-t-20 mg-b-20">
                                <div class="card-header bg-info">
                                    <h6 class="card-title tx-white">รายการทรัพยากรที่ยืม</h6>
                                </div>
                                <div class="card-body">
                                    @if (!$notification->is_read)
                                        <form id="confirmation-form" action="{{ route('notifications.confirm', $notification->id) }}" method="POST">
                                            @csrf
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th class="text-center" width="5%">ลำดับ</th>
                                                            <th width="30%">ชื่อเรื่อง</th>
                                                            <th width="20%">ผู้แต่ง</th>
                                                            <th width="15%">เลขเรียกหนังสือ</th>
                                                            <th class="text-center" width="15%">สถานะ</th>
                                                            <th width="15%">หมายเหตุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($notification->order->orderItems as $index => $item)
                                                            <tr>
                                                                <td class="text-center">{{ $index + 1 }}</td>
                                                                <td>{{ $item->subject }}</td>
                                                                <td>{{ $item->author }}</td>
                                                                <td>{{ $item->callnum }}</td>
                                                                <td class="text-center">
                                                                    <select class="form-control item-status"
                                                                           id="item-status-{{ $item->id }}"
                                                                           name="item_status[{{ $item->id }}]">
                                                                        <option value="available" selected>มีให้ยืม</option>
                                                                        <option value="unavailable">ไม่มีให้ยืม</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="item-note-container" id="note-container-{{ $item->id }}" style="display: none;">
                                                                        <input type="text" class="form-control form-control-sm item-note"
                                                                               id="item-note-{{ $item->id }}"
                                                                               name="item_notes[{{ $item->id }}]"
                                                                               placeholder="ระบุเหตุผล">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label for="staff_id" class="form-control-label">เลือกเจ้าหน้าที่ผู้ยืนยัน: <span class="tx-danger">*</span></label>
                                                <select class="form-control" name="staff_id" id="staff_id" required>
                                                    <option value="">-- เลือกเจ้าหน้าที่ --</option>
                                                    @foreach ($staffs as $staff)
                                                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('staff_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="confirmation_note" class="form-control-label">บันทึกเพิ่มเติม:</label>
                                                <textarea class="form-control" name="confirmation_note" id="confirmation_note" rows="3"></textarea>
                                            </div>

                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-lg">
                                                    <i class="fa fa-check-circle"></i> ยืนยันการรับทราบ
                                                </button>
                                                <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                                    <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                                </a>
                                            </div>
                                        </form>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th class="text-center" width="5%">ลำดับ</th>
                                                        <th width="30%">ชื่อเรื่อง</th>
                                                        <th width="20%">ผู้แต่ง</th>
                                                        <th width="15%">เลขเรียกหนังสือ</th>
                                                        <th class="text-center" width="15%">สถานะ</th>
                                                        <th width="15%">หมายเหตุ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($notification->order->orderItems as $index => $item)
                                                        <tr>
                                                            <td class="text-center">{{ $index + 1 }}</td>
                                                            <td>{{ $item->subject }}</td>
                                                            <td>{{ $item->author }}</td>
                                                            <td>{{ $item->callnum }}</td>
                                                            <td class="text-center">
                                                                @php
                                                                    $isAvailable = isset($item->status) ? $item->status == 'available' : true;
                                                                @endphp
                                                                @if($isAvailable)
                                                                    <span class="badge badge-success">มีให้ยืม</span>
                                                                @else
                                                                    <span class="badge badge-danger">ไม่มีให้ยืม</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $item->note ?? '-' }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @if ($notification->is_read)
                                <div class="bg-gray-200 pd-20">
                                    <h5 class="tx-dark">ข้อมูลการยืนยัน</h5>
                                    <div class="row mg-t-10">
                                        <div class="col-md-4">
                                            <p class="tx-medium">สถานะ:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><span class="badge badge-success">ยืนยันแล้ว</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="tx-medium">ยืนยันโดย:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $notification->staff->name ?? '-' }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="tx-medium">เวลาที่ยืนยัน:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $notification->confirmed_at ? $notification->confirmed_at->format('d/m/Y H:i:s') : '-' }}</p>
                                        </div>
                                    </div>
                                    @if ($notification->confirmation_note)
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="tx-medium">บันทึกเพิ่มเติม:</p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{ $notification->confirmation_note }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="text-center mt-4">
                                    <a href="{{ route('order-list-view', $notification->order_id) }}" class="btn btn-info btn-lg">
                                        <i class="fa fa-eye"></i> ดูรายละเอียดการยืม
                                    </a>
                                    <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                        <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .badge {
            padding: 8px 12px;
            font-size: 12px;
            border-radius: 4px;
            display: inline-block;
        }
        .badge-success {
            background-color: #28a745;
            color: white;
        }
        .badge-danger {
            background-color: #dc3545;
            color: white;
        }
        .badge-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .select2-container {
            width: 100% !important;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        /* สไตล์สำหรับ dropdown */
        .item-status {
            font-size: 14px;
            border-radius: 4px;
        }
        .item-status option[value="available"] {
            background-color: #28a745;
            color: white;
        }
        .item-status option[value="unavailable"] {
            background-color: #dc3545;
            color: white;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // ตรวจสอบว่า form มี element ที่ต้องการหรือไม่
            if ($('#confirmation-form').length > 0) {
                // ตรวจสอบการส่งฟอร์ม
                $('#confirmation-form').submit(function(e) {
                    const staffId = $('#staff_id').val();
                    if (!staffId) {
                        e.preventDefault();
                        alert('กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน');
                        return false;
                    }
                    return true;
                });

                // การทำงานของ dropdown
                $('.item-status').on('change', function() {
                    const itemId = this.id.replace('item-status-', '');
                    const noteContainer = $(`#note-container-${itemId}`);

                    if ($(this).val() === 'unavailable') {
                        noteContainer.show();
                        $(`#item-note-${itemId}`).prop('required', true);
                    } else {
                        noteContainer.hide();
                        $(`#item-note-${itemId}`).prop('required', false);
                    }
                });
            }
        });
    </script>
@endsection
```

## File: resources/views/notifications/index.blade.php
```php
@extends('frontend.main_master')
@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">รายการแจ้งเตือนทั้งหมด</h6>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-wrapper">
                    <div class="text-right mb-4">
                        <a href="{{ route('notifications.mark-all-read') }}" class="btn btn-info"
                            onclick="return confirm('ต้องการทำเครื่องหมายว่าอ่านทั้งหมดแล้วใช่หรือไม่?')">
                            <i class="fa fa-check-square-o"></i> อ่านทั้งหมดแล้ว
                        </a>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <form action="{{ route('notifications.index') }}" method="GET">
                                <select id="status-filter" name="status" class="form-control"
                                    onchange="this.form.submit()">
                                    <option value="">ทั้งหมด</option>
                                    <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>
                                        ยังไม่ได้ยืนยัน</option>
                                    <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>ยืนยันแล้ว
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
                        <strong><i class="fa fa-filter mr-2"></i>สถานะการกรอง:</strong>
                        @if(request('status') == 'unread')
                            กำลังแสดงรายการที่ <span class="badge badge-danger">ยังไม่ได้ยืนยัน</span> เท่านั้น
                        @elseif(request('status') == 'read')
                            กำลังแสดงรายการที่ <span class="badge badge-success">ยืนยันแล้ว</span> เท่านั้น
                        @else
                            กำลังแสดงรายการทั้งหมด
                        @endif
                        <a href="{{ route('notifications.index') }}" class="btn btn-sm btn-outline-secondary ml-2">ล้างตัวกรอง</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <table class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>ข้อความ</th>
                                <th>คณะ/หน่วยงาน</th>
                                <th>สถานะการแจ้งเตือน</th>
                                <th>สถานะการยืม</th>
                                <th>เจ้าหน้าที่ผู้ยืนยัน</th>
                                <th>การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($notifications as $notification)
                                <tr class="{{ $notification->is_read ? 'read' : 'unread' }}">
                                    <td>{{ $notification->created_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $notification->message }}</td>
                                    <td>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</td>
                                    <td>
                                        @if ($notification->is_read)
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-danger">รอยืนยัน</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($notification->order->status == 'success')
                                            <span class="badge badge-success">สำเร็จ</span>
                                        @else
                                            <span class="badge badge-warning">รออนุมัติ</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($notification->is_read && $notification->staff)
                                            {{ $notification->staff->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('notifications.detail', $notification->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> ดูรายละเอียด
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">ไม่มีการแจ้งเตือน</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $notifications->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .unread {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .unread td:first-child::before {
            content: "•";
            color: #dc3545;
            font-size: 24px;
            margin-right: 8px;
            position: relative;
            top: 2px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .page-item:first-child .page-link,
        .page-item:last-child .page-link {
            border-radius: 20px;
        }

        .page-link {
            color: #333;
            border: none;
            padding: 0.5rem 0.75rem;
            margin: 0 3px;
            border-radius: 20px;
        }

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-link:hover {
            background-color: #f8f9fa;
            color: #0056b3;
        }

        #status-filter {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        #status-filter:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
@endsection
```

## File: resources/views/policy.blade.php
```php
<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
```

## File: resources/views/profile/delete-user-form.blade.php
```php
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
```

## File: resources/views/profile/logout-other-browser-sessions-form.blade.php
```php
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Browser Sessions') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage and log out your active sessions on other browsers and devices.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
        </div>

        @if (count($this->sessions) > 0)
            <div class="mt-5 space-y-6">
                <!-- Other Browser Sessions -->
                @foreach ($this->sessions as $session)
                    <div class="flex items-center">
                        <div>
                            @if ($session->agent->isDesktop())
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                                    <path d="M0 0h24v24H0z" stroke="none"></path><rect x="7" y="4" width="10" height="16" rx="1"></rect><path d="M11 5h2M12 17v.01"></path>
                                </svg>
                            @endif
                        </div>

                        <div class="ml-3">
                            <div class="text-sm text-gray-600">
                                {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    {{ $session->ip_address }},

                                    @if ($session->is_current_device)
                                        <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                    @else
                                        {{ __('Last active') }} {{ $session->last_active }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex items-center mt-5">
            <x-jet-button wire:click="confirmLogout" wire:loading.attr="disabled">
                {{ __('Log Out Other Browser Sessions') }}
            </x-jet-button>

            <x-jet-action-message class="ml-3" on="loggedOut">
                {{ __('Done.') }}
            </x-jet-action-message>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingLogout">
            <x-slot name="title">
                {{ __('Log Out Other Browser Sessions') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="logoutOtherBrowserSessions" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2"
                            wire:click="logoutOtherBrowserSessions"
                            wire:loading.attr="disabled">
                    {{ __('Log Out Other Browser Sessions') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
```

## File: resources/views/profile/show.blade.php
```php
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
```

## File: resources/views/profile/two-factor-authentication-form.blade.php
```php
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Two Factor Authentication') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Add additional security to your account using two factor authentication.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('You have enabled two factor authentication.') }}
            @else
                {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Enable') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Regenerate Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Show Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Disable') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
```

## File: resources/views/profile/update-password-form.blade.php
```php
<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
```

## File: resources/views/profile/update-profile-information-form.blade.php
```php
<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
```

## File: resources/views/terms.blade.php
```php
<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
```

## File: resources/views/welcome.blade.php
```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
```

## File: routes/api.php
```php
<?php

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ใน routes/api.php
Route::get('/notifications/count', function() {
    return response()->json([
        'count' => Notification::where('is_read', false)->count()
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
```

## File: routes/channels.php
```php
<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
```

## File: routes/console.php
```php
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
```

## File: routes/web.php
```php
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PatronTypeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function() {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'Store'])->name('admin.login');
});



// check auth all page for admin
Route::middleware(['auth:admin'])->group(function(){

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');

    // Admin Faculty All Routes
    Route::prefix('faculty')->group(function(){
        Route::get('/view', [FacultyController::class, 'FacultyView'])->name('all.faculty');
        Route::post('/store', [FacultyController::class, 'FacultyStore'])->name('faculty.store');
        Route::get('/edit/{id}', [FacultyController::class, 'FacultyEdit'])->name('faculty.edit');
        Route::post('/update', [FacultyController::class, 'FacultyUpdate'])->name('faculty.update');
        Route::get('/delete/{id}', [FacultyController::class, 'FacultyDelete'])->name('faculty.delete');

        // Admin Patron Type Route
        Route::get('/patrontype/view', [PatronTypeController::class, 'PatronTypeView'])->name('all.patrontype');
        Route::post('/patrontype/store', [PatronTypeController::class, 'PatronTypeStore'])->name('patrontype.store');
        Route::get('/patrontype/edit/{id}', [PatronTypeController::class, 'PatronTypeEdit'])->name('patrontype.edit');

        // Admin Report Route
        Route::prefix('reports')->group(function(){
            Route::get('/view', [ReportController::class, 'ReportView'])->name('all.report');
            Route::post('/search/by/filter', [ReportController::class, 'ReportByFilter'])->name('report.by.filter');
            Route::post('/download/pdf', [ReportController::class, 'DownloadReportPDF'])->name('report.download.pdf');
            Route::post('/download/excel', [ReportController::class, 'DownloadReportExcel'])->name('report.download.excel');
        });

    });

    Route::prefix('staff')->group(function(){
        Route::get('/view', [StaffController::class, 'StaffView'])->name('all.staff');
        Route::post('/store', [StaffController::class, 'StaffStore'])->name('staff.store');
        Route::get('/edit/{id}', [StaffController::class, 'StaffEdit'])->name('staff.edit');
        Route::post('/update', [StaffController::class, 'StaffUpdate'])->name('staff.update');
        Route::get('/delete/{id}', [StaffController::class, 'StaffDelete'])->name('staff.delete');
    });

});

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');



// login only web
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// All user frontend
Route::prefix('home')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
    Route::get('/orders', [OrderController::class, 'ListOrder'])->name('order.view');
    Route::get('/orders/list/{id}', [OrderController::class, 'OrderListView'])->name('order-list-view');
    Route::post('/order/store', [OrderController::class, 'OrderStore'])->name('order.store');
});

// routes/web.php

// Route::prefix('notifications')->group(function() {
//     Route::get('/', [NotificationController::class, 'index'])
//          ->name('notifications.index');
//     Route::get('/unread', [NotificationController::class, 'getUnreadNotifications'])
//          ->name('notifications.unread');
//     Route::post('/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])
//          ->name('notifications.mark-as-read');
//     Route::get('/mark-all-read', [NotificationController::class, 'markAllAsRead'])
//          ->name('notifications.mark-all-read');
// });

Route::prefix('notifications')->group(function() {
    Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/unread', [NotificationController::class, 'getUnreadNotifications'])->name('notifications.unread');
    Route::get('/{id}/detail', [NotificationController::class, 'viewNotificationDetail'])->name('notifications.detail');
    Route::post('/{id}/confirm', [NotificationController::class, 'confirmNotification'])->name('notifications.confirm');
    Route::get('/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.mark-all-read');
});


// Loader
// Route::post('/loading/success', [IndexController::class, 'LoadingSuccess']);
```
