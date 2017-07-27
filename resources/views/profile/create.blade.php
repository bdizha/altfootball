@extends('layouts.app')

@section('title', 'Create profile')

@section('content')

<div class="">
    <div class="_1V5wh">
        <nav class="_3Phfs">
            <a class="" href="/">
                <img src="/images/logo.png" alt="AltFootball">
            </a>
            <div class="_78rsE">Create profile</div>
            <div class="_1CSJs">
                <div class="_1S3Ei _30tVm"></div>
                <div class="_30tVm"></div>
                <div class="_30tVm"></div>
            </div>
        </nav>
        <div class="_3z1ry">
            <label class="_3UYss">Add your profile picture</label>
            <div class="UNUAY _1iE2V">
                <div class="_3ygY6">
                    <div>
                        <label for="profile-image-upload">
                            <div class="_21web">
                                <div class="_2pUFC _3Xaa0 faM3p"><img alt="" role="presentation" src="https://drivetribe.imgix.net/IoJw-6Y0TwiDcrnGGL2679?w=400&amp;h=404&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" class="_3-rkf _3Xaa0 b00q8" width="194" height="196"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" class="_2vslu">
                                    <g fill="none" fill-rule="evenodd" stroke="#000">
                                        <path stroke-width="4" d="M26.95 52c13.77 0 24.94-11.2 24.94-25S40.72 2 26.95 2C13.17 2 2 13.2 2 27s11.17 25 24.95 25z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M26.96 17.46l-.03 18.98m-9.47-9.48l18.97-.02"></path>
                                    </g>
                                </svg>
                            </div>
                        </label>
                        <input type="file" id="profile-image-upload" accept="image/*" style="display: none;">
                    </div>
                </div>
                <div class="XU9RU eGwrR _2CyDP _3QApL">
                    <div class="_2Kdch _2hv_i p5bDW">
                        <label class="_16KIM _2azBk">
                            <!-- react-text: 101 -->First name<!-- /react-text --><span class="_1AUhk">(required)</span>
                        </label>
                        <input type="text" class="BhP-y _2lwAH" name="firstName" value=""><span class="_2LSh0">25</span>
                    </div>
                    <p class="_1u7op">First name missing</p>
                </div>
                <div class="XU9RU eGwrR _2CyDP">
                    <div class="_2Kdch _2hv_i p5bDW">
                        <label class="_16KIM _2azBk">
                            <!-- react-text: 108 -->Last name<!-- /react-text --><span class="_1AUhk">(required)</span>
                        </label>
                        <input type="text" class="BhP-y _2lwAH" name="lastName" value=""><span class="_2LSh0">25</span>
                    </div>
                    <p class="_1u7op">Last name missing</p>
                </div>
            </div>
        </div>
        <div class="_2nhzB"><button class="_1nSXH _1MC-v _1h78h">Choose your tribes</button></div>
    </div>
</div>

@endsection