@extends('layouts.asset', ['id' => 'asset-show-view-template'])

@section('content')
    <h1 class="_3BaWr"></h1>
    <div class="_344b1 _5X5FD">
        <h2 class="">Community Guidelines
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
            </svg>
        </h2>
    </div>
    <div class="_344b1 mv9zs">
        <h2 class="">Terms of Use
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
            </svg>
        </h2>
    </div>
    <div class="_344b1 ZxFDK">
        <h2 class="">Privacy and Cookie Policy
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
            </svg>
        </h2>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            var viewAssetShowModel = {
            };

            ko.applyBindings(viewAssetShowModel, document.getElementById('asset-show-view-template'));
        });

    </script>
@endsection