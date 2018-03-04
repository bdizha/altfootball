<template id="fanbase-form-template">
    <div class="_1L5ou _3Xaa0" data-bind="css: { active: showFanbaseForm }">
        <div class="_2V52z" data-bind="css: { active: showFanbaseForm }">
            <div>
                <form data-bind="submit: saveFanbase">
                    <div class="_2p4GS _1Kdw6">
                        <button class="_2L8qZ _1FQjf" data-bind="click: closeFanbaseForm">
                            <svg width="24" height="24" viewBox="0 0 18 18">
                                <g stroke="rgba(0, 201, 255, 0.65)" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                    <path d="M2.368 2.282L16.51 16.425M16.218 2.282L2.075 16.425"></path>
                                </g>
                            </svg>
                        </button>
                        <h2 class="_3Cj2a _3nf8R">Create a fanbase</h2>
                        <button type="submit" class="ADq5f _2tXok _3nf8R">Done</button>
                        <div class="_1CSJs">
                            <div class="_1S3Ei _30tVm"></div>
                        </div>
                    </div>
                    <div class="_1UEBS">
                        <div>
                            <label for="fanbase-image-upload">
                                <div>
                                    <div class="_1edwb">Fanbase image</div>
                                    <div class="_21SpA">Recommended size 250x250px</div>
                                    <div class="_266GY p56qA">
                                        <div class="_2eSgq _3Xaa0 _1KXFt" data-bind="visible: imageFileData().dataURL">
                                            <div class="_23p6h">
                                                <img data-bind="attr: { src: imageFileData().dataURL }, visible: imageFileData().dataURL" role="presentation" alt="" class="_2PoG-" width="116" style="opacity: 1;">
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" class="W8lfs" data-bind="css: { _1NaRT: imageFileData().dataURL }">
                                            <g fill="none" fill-rule="evenodd" stroke="rgba(0, 201, 255, 0.65)">
                                                <path stroke-width="2" d="M18.46 36c9.65 0 17.46-7.84 17.46-17.5S28.11 1 18.46 1A17.48 17.48 0 0 0 1 18.5C1 28.16 8.82 36 18.46 36z"></path>
                                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                    <path d="M18.47 11.83l-.02 13.28M11.82 18.48l13.28-.02"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="_1oCLl" style="transform: scaleY(0);"></div>
                                    </div>
                                </div>
                            </label>
                            <input type="file" id="fanbase-image-upload" data-bind="fileInput: imageFileData" accept="image/*" style="display: none;">
                        </div>
                        <div class="QogzZ">
                            <label for="fanbase-cover-upload">
                                <div>
                                    <div class="_1edwb">
                                        <div class="_3adpZ">
                                            Background image
                                            <span class="_16_1w">(optional)</span>
                                        </div>
                                    </div>
                                    <div class="_21SpA">Recommended size 1440x360px</div>
                                    <div class="_266GY _1Qepj">
                                        <div class="_2eSgq _3Xaa0 _1KXFt" data-bind="visible: coverFileData().dataURL">
                                            <div class="_23p6h">
                                                <img data-bind="attr: { src: coverFileData().dataURL }, visible: coverFileData().dataURL" role="presentation" alt="" class="_2PoG-" width="439" style="opacity: 1;">
                                            </div>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" class="W8lfs" data-bind="css: { _1NaRT: coverFileData().dataURL }">
                                            <g fill="none" fill-rule="evenodd" stroke="rgba(0, 201, 255, 0.65)">
                                                <path stroke-width="2" d="M18.46 36c9.65 0 17.46-7.84 17.46-17.5S28.11 1 18.46 1A17.48 17.48 0 0 0 1 18.5C1 28.16 8.82 36 18.46 36z"></path>
                                                <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                    <path d="M18.47 11.83l-.02 13.28M11.82 18.48l13.28-.02"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="_1oCLl" style="transform: scaleY(0);"></div>
                                    </div>
                                </div>
                            </label>
                            <input type="file" id="fanbase-cover-upload" data-bind="fileInput: coverFileData" accept="image/*" style="display: none;">
                        </div>
                        <div class="XU9RU PghTV _1E9Zo _2CyDP" data-bind="css: { _1fTaL: focusedName }">
                            <div class="_2Kdch _3iCHD">
                                <label class="_16KIM" data-bind="click: focusName">
                                    Fanbase name
                                </label>
                                <input type="text" class="BhP-y" data-bind="value: name, valueUpdate: 'afterkeyup', event: { focus: focusName, blur: blurName, keypress: keyupName }" />
                                <span class="_2LSh0" data-bind="text: nameLimit"></span>
                            </div>
                        </div>
                        <div class="XU9RU PghTV _1E9Zo _2CyDP" data-bind="css: { _1fTaL: focusedStamp }">
                            <div class="_2Kdch _3iCHD">
                                <label class="_16KIM" data-bind="click: focusStamp">
                                    Fanbase stamp
                                </label>
                                <input type="text" class="BhP-y" data-bind="value: stamp, valueUpdate: 'afterkeyup', event: { focus: focusStamp, blur: blurStamp, keypress: keyupStamp }" />
                                <span class="_2LSh0" data-bind="text: stampLimit"></span>
                            </div>
                        </div>
                        <div class="XU9RU PghTV _1E9Zo _2CyDP" data-bind="css: { _1fTaL: focusedDescription }">
                            <div class="_2Kdch _3iCHD">
                                <label class="_16KIM" data-bind="click: focusDescription">
                                    Description
                                </label>
                                <textarea class="BhP-y" data-bind="value: description, valueUpdate: 'afterkeyup', event: { focus: focusDescription, blur: blurDescription, keypress: keyupDescription }"></textarea>
                                <span class="_2LSh0" data-bind="text: descriptionLimit"></span>
                            </div>
                        </div>
                        <div class="_2crgF">
                            <span class="_2y6Xw">Who can post?</span>
                            <div class="_3R_r_">
                                <label>
                                    <span class="_2H8uv _3aB_M" data-bind="css: { _2z88k: access() == 'public' }">
                                        <input type="radio" name="accessGroup" value="public" data-bind="checked: access"></span>
                                    All member
                                </label>
                                <label>
                                    <span class="_2H8uv _3aB_M" data-bind="css: { _2z88k: access() == 'private' }">
                                        <input type="radio" name="accessGroup" value="private" data-bind="checked: access"></span>
                                    Selected members
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>