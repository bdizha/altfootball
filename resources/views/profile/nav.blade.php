<nav class="_3Phfs">
    <div width="52" height="52" class="EbtUv">
        <img alt="Altfootball" role="presentation" src="/images/green-logo.png">
    </div>
    <div class="_78rsE">{{ $action  }}</div>
    <div class="_1CSJs">
        @foreach(range(1, 3) as $key)
            <div class="_30tVm @if($step === $key) _1S3Ei @endif"></div>
        @endforeach
    </div>
</nav>