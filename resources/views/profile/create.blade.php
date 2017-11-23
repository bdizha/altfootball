@extends('layouts.profile', ['id' => 'profile-create-view-template'])

@section('title', 'Create profile')

@section('content')
    <div>
        @include('profile.nav', ['action' => 'Create profile', 'step' => 1])
        <div class="_1V5wh">
            <div class="_3z1ry">
                {!! Form::open(['route' => 'profile.store', 'role' => 'form', 'method' => 'POST', 'data-bind' => 'submit: submit'] ) !!}
                <label class="_3UYss">Add your profile picture</label>
                <div class="UNUAY _1iE2V">
                    <div class="_3ygY6">
                        <div>
                            <label for="profile-image-upload">
                                <div class="_21web">
                                    <div class="_2pUFC _3Xaa0 faM3p"><img alt="" role="presentation" src="https://drivetribe.imgix.net/IoJw-6Y0TwiDcrnGGL2679?w=400&amp;h=404&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" class="_3-rkf _3Xaa0 b00q8" width="194" height="196"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" class="_2vslu">
                                        <g fill="none" fill-rule="evenodd" stroke="rgba(103, 143, 185, 0.85)">
                                            <path stroke-width="4" d="M26.95 52c13.77 0 24.94-11.2 24.94-25S40.72 2 26.95 2C13.17 2 2 13.2 2 27s11.17 25 24.95 25z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M26.96 17.46l-.03 18.98m-9.47-9.48l18.97-.02"></path>
                                        </g>
                                    </svg>
                                </div>
                            </label>
                            <input type="file" id="profile-image-upload" accept="image/*" style="display: none;">
                        </div>
                    </div>
                    <div class="XU9RU eGwrR _2CyDP _3QApL" data-bind="css: { _1fTaL: focusedFirstName }">
                        <div class="_2Kdch _2hv_i">
                            <label class="_16KIM _2azBk">
                                First name
                                <span class="_1AUhk">(required)</span>
                            </label>
                            {!! Form::text('first_name', $user->first_name, ['class' => 'BhP-y _2lwAH', 'placeholder' => '', 'data-bind' => 'value: firstName, event: {focus: focusFirstName, blur: blurFirstName }', 'row-id' => 'first-name-row']) !!}
                            <span class="_2LSh0">20</span>
                            @if ($errors->has('first_name'))
                                <span class="_1u7op">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="XU9RU eGwrR _2CyDP _3QApL" data-bind="css: { _1fTaL: focusedLastName }">
                        <div class="_2Kdch _2hv_i">
                            <label class="_16KIM _2azBk">
                                Last name
                                <span class="_1AUhk">(required)</span>
                            </label>
                            {!! Form::text('last_name', $user->last_name, ['class' => 'BhP-y _2lwAH', 'placeholder' => '', 'data-bind' => 'value: lastName, event: {focus: focusLastName, blur: blurLastName}', 'row-id' => 'last-name-row']) !!}
                            <span class="_2LSh0">20</span>
                            @if ($errors->has('last_name'))
                                <span class="_1u7op">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="_2nhzB">
                        <button class="_1nSXH _1MC-v _1h78h">Choose your fanbases</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {

            var data = {!! $user->toJson() !!};

            var viewProfileCreateModel = {
                firstName: ko.observable(data.first_name ? data.first_name : '').extend({
                    required: {
                        message: 'First name is required.'
                    }
                }),
                lastName: ko.observable(data.last_name ? data.last_name : '').extend({
                    required: {
                        message: 'Last name is required.'
                    }
                }),
                canProfileCreate: ko.observable(false),
                focusedFirstName: ko.observable(false),
                focusedLastName: ko.observable(false),
                focusFirstName: function(){
                    this.focusedFirstName(true);
                },
                focusLastName: function(){
                    this.focusedLastName(true);
                },
                blurFirstName: function(){
                    if(this.firstName().length === 0){
                        this.focusedFirstName(false);
                    }
                    this.toggleErrors();
                    this.showAllMessages();
                },
                blurLastName: function(){
                    if(this.lastName().length === 0){
                        this.focusedLastName(false);
                    }
                    this.toggleErrors();
                    this.showAllMessages();
                },
                showAllMessages: function(){
                    viewProfileCreateModel.errors.showAllMessages();
                },
                toggleErrors: function(){
                    $("._2Kdch").each(function () {
                        var $this = $(this);

                        if($this.find('span._1u7op').is(':visible')){
                            $this.addClass('p5bDW');
                        }
                        else{
                            $this.removeClass('p5bDW');
                        }
                    });
                },
                submit: function(){
                    viewProfileCreateModel.errors.showAllMessages();
                    return viewProfileCreateModel.errors().length === 0;
                }
            };

            viewProfileCreateModel.errors = ko.validation.group(viewProfileCreateModel);

            if(viewProfileCreateModel.firstName().length > 0){
                viewProfileCreateModel.focusFirstName();
                viewProfileCreateModel.blurFirstName();
            }

            if(viewProfileCreateModel.lastName().length > 0){
                viewProfileCreateModel.focusLastName();
                viewProfileCreateModel.blurLastName();
            }

            ko.applyBindings(viewProfileCreateModel, document.getElementById('profile-create-view-template'));
        });

    </script>
@endsection