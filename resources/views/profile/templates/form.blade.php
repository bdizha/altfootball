<template id="user-form-template" data-bind="visible: showUserForm">
    <div class="_1L5ou _3Xaa0" data-bind="css: { active: showUserForm }">
        <div class="_2V52z" style="opacity: 1; transform: translateX(0%) translateZ(0px);">
            <div>
                <div class="_3C1Cx">
                    <button class="_1ozur" data-bind="click: closeEditForm">
                        <svg width="24" height="24" viewBox="0 0 18 18">
                            <g stroke="rgb(153, 173, 183)" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <path d="M2.368 2.282L16.51 16.425M16.218 2.282L2.075 16.425"></path>
                            </g>
                        </svg>
                    </button>
                    <h2 class="_1UOSn _2TaIJ">Edit Profile</h2>
                    <div></div>
                </div>
                {!! Form::open(['route' => ['profile.update', $user->id], 'role' => 'form', 'method' => 'PATCH'] ) !!}
                <div class="_3e1iZ">
                    <label class="vwhZ_">Add your profile picture</label>
                    <div class="_3z2sH">
                        <div>
                            <label for="profile-image-upload">
                                <div class="_21web">
                                    <div class="_2pUFC _3Xaa0 faM3p">
                                        <img data-bind="attr: { src: imageFileData().dataURL, alt: name, title: name }, visible: imageFileData().dataURL" role="presentation" class="_2PoG-" width="350" height="350" style="opacity: 1;">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" class="_2vslu">
                                        <g fill="none" fill-rule="evenodd" stroke="rgb(153, 173, 183)">
                                            <path stroke-width="4" d="M26.95 52c13.77 0 24.94-11.2 24.94-25S40.72 2 26.95 2C13.17 2 2 13.2 2 27s11.17 25 24.95 25z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M26.96 17.46l-.03 18.98m-9.47-9.48l18.97-.02"></path>
                                        </g>
                                    </svg>
                                </div>
                            </label>
                            <input type="file" id="profile-image-upload" accept="image/*" style="display: none;">
                        </div>
                    </div>
                    <div class="XU9RU _3-JIN _2CyDP" data-bind="css: { _1fTaL: focusedFirstName }">
                        <div class="_2Kdch">
                            <label class="_16KIM" data-bind="click: focusFirstName">
                                First name
                                <span class="_1AUhk">(required)</span>
                            </label>
                            <input type="text" class="BhP-y" name="firstName" data-bind="value: firstName, event: { focus: focusFirstName, blur: blurFirstName }"><span class="_2LSh0">17</span>
                        </div>
                    </div>
                    <div class="XU9RU _3-JIN _2CyDP" data-bind="css: { _1fTaL: focusedLastName }">
                        <div class="_2Kdch">
                            <label class="_16KIM" data-bind="click: focusLastName">
                                Last name
                                <span class="_1AUhk">(required)</span>
                            </label>
                            <input type="text" class="BhP-y" name="lastName" data-bind="value: lastName, event: {focus: focusLastName, blur: blurLastName }"><span class="_2LSh0">19</span>
                        </div>
                    </div>
                    <div class="XU9RU _3-JIN _2CyDP" data-bind="css: { _1fTaL: focusedBio }">
                        <div class="_2Kdch">
                            <label class="_16KIM" data-bind="click: focusBio">
                                Tell us all about yourself
                            </label>
                            <textarea class="BhP-y" name="bio" data-bind="value: bio, event: {focus: focusBio, blur: blurBio }"></textarea>
                            <span class="_2LSh0">250</span>
                        </div>
                    </div>
                    <div class="XU9RU _3-JIN _2CyDP" data-bind="css: { _1fTaL: focusedWebsite }">
                        <div class="_2Kdch">
                            <label class="_16KIM" data-bind="click: focusWebsite">
                                Website
                            </label>
                            <input type="text" class="BhP-y" name="website" data-bind="value: website, event: {focus: focusWebsite, blur: blurWebsite }"/>
                            <span class="_2LSh0">50</span>
                        </div>
                    </div>
                    <button class="_31TRT _1geYT" data-bind="click: submit, enable: enabled">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>