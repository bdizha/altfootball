@extends('layouts.asset', ['id' => 'asset-show-view-template'])

@section('content')
    <h1 class="_3BaWr" data-reactid="63"></h1>
    <div class="_344b1 _5X5FD" data-reactid="64">
        <h2 class="" data-reactid="65">Community Guidelines
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" data-reactid="67">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0" data-reactid="68"></path>
            </svg>
        </h2>
    </div>
    <div class="_344b1 mv9zs" data-reactid="69">
        <h2 class="" data-reactid="70">Terms of Use
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" data-reactid="72">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0" data-reactid="73"></path>
            </svg>
        </h2>
    </div>
    <div class="_344b1 ZxFDK" data-reactid="74">
        <h2 class="" data-reactid="75">Privacy and Cookie Policy
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" data-reactid="77">
                <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0" data-reactid="78"></path>
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