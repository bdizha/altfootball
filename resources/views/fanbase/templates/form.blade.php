<template id="fanbase-form-template">
    <div class="_1L5ou _3Xaa0" data-bind="css: { active: showFanbaseForm }">
        <div class="_2V52z" data-bind="css: { active: showFanbaseForm }">
            <div>
                <form data-bind="submit: saveFanbase">
                    <div class="_2p4GS _1Kdw6">
                        <button class="_2L8qZ _1FQjf" data-bind="click: closeFanbaseForm">
                            <svg width="18" height="18" viewBox="0 0 18 18">
                                <g stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                    <path d="M2.368 2.282L16.51 16.425M16.218 2.282L2.075 16.425"></path>
                                </g>
                            </svg>
                        </button>
                        <h2 class="_3Cj2a _3nf8R">Create a fanbase</h2>
                        <button type="submit" class="ADq5f _2tXok _3nf8R">Next</button>
                        <div class="_1CSJs">
                            <div class="_1S3Ei _30tVm"></div>
                            <div class="_30tVm"></div>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" class="W8lfs">
                                            <g fill="none" fill-rule="evenodd" stroke="#000">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" class="W8lfs">
                                            <g fill="none" fill-rule="evenodd" stroke="#000">
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
                        <div class="XU9RU PghTV _1E9Zo _2CyDP">
                            <div class="_2Kdch _3iCHD">
                                <label class="_16KIM">
                                    Fanbase name
                                </label>
                                <input type="text" class="BhP-y" name="name" data-bind="value: name, valueUpdate: 'afterkeyup'" />
                                <span class="_2LSh0">24</span>
                            </div>
                        </div>
                        <div class="ZztmY">
                            <div class="XU9RU _3KE3F _2CyDP">
                                <div class="_2Kdch _3iCHD">
                                    <label class="_16KIM">
                                        Description
                                    </label>
                                    <textarea class="BhP-y" name="description" data-bind="value: description, valueUpdate: 'afterkeyup'"></textarea>
                                    <span class="_2LSh0">80</span>
                                </div>
                            </div>
                            <button class="_1NluH">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                        <circle cx="9" cy="9" r="9" stroke="#000" stroke-width="1.5"></circle>
                                        <path fill="#000" d="M8.74 3.64c-.69 0-1.18.49-1.18 1.16 0 .66.49 1.15 1.18 1.15.67 0 1.16-.49 1.16-1.15 0-.67-.5-1.16-1.16-1.16zm-.97 3.12V14h1.92V6.76H7.77z"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="_2crgF">
                            <span class="_2y6Xw">Who can post?</span>
                            <div class="_3R_r_">
                                <label>
                                    <span class="_2H8uv _2z88k _3aB_M">
                                        <input type="radio" value="all" data-bind="value: all"></span>
                                    All members
                                </label>
                                <label>
                                    <span class="_2H8uv _3aB_M">
                                        <input type="radio" value="members" data-bind="value: members"></span>
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