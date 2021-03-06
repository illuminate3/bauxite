{{-- THIS IS OBVIOUSLY ALL FOR DEMONSTRATION --}}
<aside class="aside-menu">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"><i class="icon-settings"></i></a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane p-3 active" id="tab1" role="tabpanel">
            Tab Content 1
        </div><!--tab 1-->

        <div class="tab-pane p-3" id="tab2" role="tabpanel">
            Tab Content 2
        </div><!--tab 2-->

        <div class="tab-pane p-3" id="tab3" role="tabpanel">
            {{-- Tab Content 3 --}}
        @if (config('locale.status') && count(config('locale.languages')) > 1)
            {{-- <li class="nav-item px-3 dropdown"> --}}
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="d-md-down-none">{{ __('menus.language-picker.language') }} ({{ strtoupper(app()->getLocale()) }})</span>
                </a>

                @include('includes.partials.lang')
            {{-- </li> --}}
        @endif

        </div><!--tab 3-->
    </div><!--tab-content-->
</aside>
