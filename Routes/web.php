<?php

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

Route::prefix('lte')->group(function () {
    if (config('app.env') == 'local') {
        Route::get('pages/charts/chartjs', fn() => view('lte::components.pages.charts.chartjs'))->name('lte.pages.charts.chartjs');
        Route::get('pages/charts/flot', fn() => view('lte::components.pages.charts.flot'))->name('lte.pages.charts.flot');
        Route::get('pages/charts/inline', fn() => view('lte::components.pages.charts.inline'))->name('lte.pages.charts.inline');
        Route::get('pages/charts/uplot', fn() => view('lte::components.pages.charts.uplot'))->name('lte.pages.charts.uplot');
        Route::get('pages/examples/404', fn() => view('lte::components.pages.examples.404'))->name('lte.pages.examples.404');
        Route::get('pages/examples/500', fn() => view('lte::components.pages.examples.500'))->name('lte.pages.examples.500');
        Route::get('pages/examples/blank', fn() => view('lte::components.pages.examples.blank'))->name('lte.pages.examples.blank');
        Route::get('pages/examples/contact-us', fn() => view('lte::components.pages.examples.contact-us'))->name('lte.pages.examples.contact-us');
        Route::get('pages/examples/contacts', fn() => view('lte::components.pages.examples.contacts'))->name('lte.pages.examples.contacts');
        Route::get('pages/examples/e-commerce', fn() => view('lte::components.pages.examples.e-commerce'))->name('lte.pages.examples.e-commerce');
        Route::get('pages/examples/faq', fn() => view('lte::components.pages.examples.faq'))->name('lte.pages.examples.faq');
        Route::get('pages/examples/forgot-password', fn() => view('lte::components.pages.examples.forgot-password'))->name('lte.pages.examples.forgot-password');
        Route::get('pages/examples/forgot-password-v2', fn() => view('lte::components.pages.examples.forgot-password-v2'))->name('lte.pages.examples.forgot-password-v2');
        Route::get('pages/examples/invoice', fn() => view('lte::components.pages.examples.invoice'))->name('lte.pages.examples.invoice');
        Route::get('pages/examples/invoice-print', fn() => view('lte::components.pages.examples.invoice-print'))->name('lte.pages.examples.invoice-print');
        Route::get('pages/examples/language-menu', fn() => view('lte::components.pages.examples.language-menu'))->name('lte.pages.examples.language-menu');
        Route::get('pages/examples/legacy-user-menu', fn() => view('lte::components.pages.examples.legacy-user-menu'))->name('lte.pages.examples.legacy-user-menu');
        Route::get('pages/examples/lockscreen', fn() => view('lte::components.pages.examples.lockscreen'))->name('lte.pages.examples.lockscreen');
        Route::get('pages/examples/login', fn() => view('lte::components.pages.examples.login'))->name('lte.pages.examples.login');
        Route::get('pages/examples/login-v2', fn() => view('lte::components.pages.examples.login-v2'))->name('lte.pages.examples.login-v2');
        Route::get('pages/examples/pace', fn() => view('lte::components.pages.examples.pace'))->name('lte.pages.examples.pace');
        Route::get('pages/examples/profile', fn() => view('lte::components.pages.examples.profile'))->name('lte.pages.examples.profile');
        Route::get('pages/examples/project-add', fn() => view('lte::components.pages.examples.project-add'))->name('lte.pages.examples.project-add');
        Route::get('pages/examples/project-detail', fn() => view('lte::components.pages.examples.project-detail'))->name('lte.pages.examples.project-detail');
        Route::get('pages/examples/project-edit', fn() => view('lte::components.pages.examples.project-edit'))->name('lte.pages.examples.project-edit');
        Route::get('pages/examples/projects', fn() => view('lte::components.pages.examples.projects'))->name('lte.pages.examples.projects');
        Route::get('pages/examples/recover-password', fn() => view('lte::components.pages.examples.recover-password'))->name('lte.pages.examples.recover-password');
        Route::get('pages/examples/recover-password-v2', fn() => view('lte::components.pages.examples.recover-password-v2'))->name('lte.pages.examples.recover-password-v2');
        Route::get('pages/examples/register', fn() => view('lte::components.pages.examples.register'))->name('lte.pages.examples.register');
        Route::get('pages/examples/register-v2', fn() => view('lte::components.pages.examples.register-v2'))->name('lte.pages.examples.register-v2');
        Route::get('pages/forms/advanced', fn() => view('lte::components.pages.forms.advanced'))->name('lte.pages.forms.advanced');
        Route::get('pages/forms/editors', fn() => view('lte::components.pages.forms.editors'))->name('lte.pages.forms.editors');
        Route::get('pages/forms/general', fn() => view('lte::components.pages.forms.general'))->name('lte.pages.forms.general');
        Route::get('pages/forms/validation', fn() => view('lte::components.pages.forms.validation'))->name('lte.pages.forms.validation');
        Route::get('pages/layout/boxed', fn() => view('lte::components.pages.layout.boxed'))->name('lte.pages.layout.boxed');
        Route::get('pages/layout/collapsed-sidebar', fn() => view('lte::components.pages.layout.collapsed-sidebar'))->name('lte.pages.layout.collapsed-sidebar');
        Route::get('pages/layout/fixed-footer', fn() => view('lte::components.pages.layout.fixed-footer'))->name('lte.pages.layout.fixed-footer');
        Route::get('pages/layout/fixed-sidebar', fn() => view('lte::components.pages.layout.fixed-sidebar'))->name('lte.pages.layout.fixed-sidebar');
        Route::get('pages/layout/fixed-sidebar-custom', fn() => view('lte::components.pages.layout.fixed-sidebar-custom'))->name('lte.pages.layout.fixed-sidebar-custom');
        Route::get('pages/layout/fixed-topnav', fn() => view('lte::components.pages.layout.fixed-topnav'))->name('lte.pages.layout.fixed-topnav');
        Route::get('pages/layout/top-nav', fn() => view('lte::components.pages.layout.top-nav'))->name('lte.pages.layout.top-nav');
        Route::get('pages/layout/top-nav-sidebar', fn() => view('lte::components.pages.layout.top-nav-sidebar'))->name('lte.pages.layout.top-nav-sidebar');
        Route::get('pages/mailbox/compose', fn() => view('lte::components.pages.mailbox.compose'))->name('lte.pages.mailbox.compose');
        Route::get('pages/mailbox/mailbox', fn() => view('lte::components.pages.mailbox.mailbox'))->name('lte.pages.mailbox.mailbox');
        Route::get('pages/mailbox/read-mail', fn() => view('lte::components.pages.mailbox.read-mail'))->name('lte.pages.mailbox.read-mail');
        Route::get('pages/search/enhanced', fn() => view('lte::components.pages.search.enhanced'))->name('lte.pages.search.enhanced');
        Route::get('pages/search/enhanced-results', fn() => view('lte::components.pages.search.enhanced-results'))->name('lte.pages.search.enhanced-results');
        Route::get('pages/search/simple', fn() => view('lte::components.pages.search.simple'))->name('lte.pages.search.simple');
        Route::get('pages/search/simple-results', fn() => view('lte::components.pages.search.simple-results'))->name('lte.pages.search.simple-results');
        Route::get('pages/tables/data', fn() => view('lte::components.pages.tables.data'))->name('lte.pages.tables.data');
        Route::get('pages/tables/jsgrid', fn() => view('lte::components.pages.tables.jsgrid'))->name('lte.pages.tables.jsgrid');
        Route::get('pages/tables/simple', fn() => view('lte::components.pages.tables.simple'))->name('lte.pages.tables.simple');
        Route::get('pages/ui/buttons', fn() => view('lte::components.pages.ui.buttons'))->name('lte.pages.ui.buttons');
        Route::get('pages/ui/general', fn() => view('lte::components.pages.ui.general'))->name('lte.pages.ui.general');
        Route::get('pages/ui/icons', fn() => view('lte::components.pages.ui.icons'))->name('lte.pages.ui.icons');
        Route::get('pages/ui/modals', fn() => view('lte::components.pages.ui.modals'))->name('lte.pages.ui.modals');
        Route::get('pages/ui/navbar', fn() => view('lte::components.pages.ui.navbar'))->name('lte.pages.ui.navbar');
        Route::get('pages/ui/ribbons', fn() => view('lte::components.pages.ui.ribbons'))->name('lte.pages.ui.ribbons');
        Route::get('pages/ui/sliders', fn() => view('lte::components.pages.ui.sliders'))->name('lte.pages.ui.sliders');
        Route::get('pages/ui/timeline', fn() => view('lte::components.pages.ui.timeline'))->name('lte.pages.ui.timeline');
        Route::get('pages/calendar', fn() => view('lte::components.pages.calendar'))->name('lte.pages.calendar');
        Route::get('pages/gallery', fn() => view('lte::components.pages.gallery'))->name('lte.pages.gallery');
        Route::get('pages/guest', fn() => view('lte::components.pages.guest'))->name('lte.pages.guest');
        Route::get('pages/kanban', fn() => view('lte::components.pages.kanban'))->name('lte.pages.kanban');
        Route::get('pages/widgets', fn() => view('lte::components.pages.widgets'))->name('lte.pages.widgets');
    }
});
