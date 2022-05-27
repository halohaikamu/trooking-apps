<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\AffiliatorObserver;
use App\Observers\AgentObserver;
use App\Observers\BarangObserver;
use App\Observers\InformasiObserver;
use App\Observers\PembayaranObserver;
use App\Observers\PesananObserver;
use App\Observers\PricelistObserver;
use App\Observers\TrackingObserver;
use App\Observers\UserObserver;
use App\Observers\VendorObserver;
use App\Observers\VoucherObserver;
use App\Models\Affiliator;
use App\Models\Agent;
use App\Models\Barang;
use App\Models\Informasi;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use App\Models\Pricelist;
use App\Models\Tracking;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Voucher;
use Illuminate\Support\Facades\Blade;

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
        // Affiliator::observe(AffiliatorObserver::class);
        // Agent::observe(AgentObserver::class);
        // Barang::observe(BarangObserver::class);
        // Informasi::observe(InformasiObserver::class);
        // Pembayaran::observe(PembayaranObserver::class);
        // Pesanan::observe(PesananObserver::class);
        // Pricelist::observe(PricelistObserver::class);
        // Tracking::observe(TrackingObserver::class);
        // User::observe(UserObserver::class);
        // Vendor::observe(VendorObserver::class);
        // Voucher::observe(VoucherObserver::class);
        Blade::directive('convert', function ($money) {
            return "<?php echo 'Rp.' . number_format($money); ?>";
        });
    }
}
