<template id='comments-template'>
    <!-- ko if: level() === 0 && isList() === false -->
    <div class="_2uxNN">
        Responses (<span data-bind="text: commentsCount"></span>)
    </div>
    <div class="ivfOh">
        <form class="_33rbn ODDw0" data-bind="submit: saveComment">
            <div data-bind="fileDrag: fileData" class="filedrag">
                <div class="_3hgGE" data-bind="visible: fileData().dataURL">
                    <button class="_1Zj5n _1PzVp" type="button">
                        <svg width="10" height="10">
                            <path fill="none" stroke="rgba(51, 74, 108, 0.65)" stroke-linecap="square" stroke-width="2" d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                        </svg>
                    </button>
                    <img class="b00q8" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                </div>
                <div class="_3oju3">
                    <div class="_2bXVy">
                        <div tabindex="-1" class="_3F6QL _2WovP">
                            <textarea placeholder="Type a response..." class="_2S1VP" data-bind="value: newCommentText, valueUpdate: 'afterkeyup', event: { focus: checkAuth }" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true">Type a response</textarea>
                        </div>
                    </div>
                    <button class="_2lkdt" type="submit" data-bind="enable: canSubmitComment" disabled="">
                        <span data-icon="send" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="rgb(107, 203, 239)" fill-opacity=".45" d="M1.101 21.757L23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="_3FA_l">
                    <div class="_29E8b">
                        <label for="media-upload" class="NOB1F">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="rgb(107, 203, 239)" fill-opacity=".5" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg>
                        </label>
                        <input type="file" name="media-upload" id="media-upload" data-bind="fileInput: fileData" accept="image/*">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /ko -->
    <ul class="_1RyqV" data-bind="visible: comments().length > 0">
        <!-- ko foreach: comments() -->
        <li class="gEjmr" data-bind="attr: { id: 'comment-' + id }">
            <button class="_2MdIb" data-tracking="post - comment - bump - remove"><div class="_1_VaP"><svg width="24" height="23" viewBox="-2 -4 24 23"><path d="M17.58 3.234c.28.68.42 1.395.42 2.145 0 .82-.17 1.59-.51 2.32-.34.723-.814 1.34-1.423 1.842-.445.41-1.594 1.46-3.445 3.146L9.44 15.592c-.13.105-.275.158-.44.158-.163 0-.31-.05-.44-.156-.573-.516-2.08-1.893-4.516-4.13C2.884 10.407 2.22 9.81 2.057 9.67c-.047-.048-.1-.095-.158-.14C1.3 9.02.84 8.41.51 7.69.182 6.97.012 6.205 0 5.396c-.01-.738.13-1.453.423-2.144.27-.656.656-1.236 1.16-1.74C2.567.504 3.745 0 5.116 0c.75 0 1.462.164 2.136.492.673.328 1.256.79 1.75 1.39.49-.6 1.074-1.062 1.748-1.39C11.424.164 12.135 0 12.885 0c1.372 0 2.55.498 3.534 1.494.5.504.89 1.084 1.16 1.74zm-7.595-.42c-.246.327-.574.49-.984.49-.41 0-.732-.163-.98-.492-.35-.457-.78-.814-1.29-1.072-.51-.258-1.046-.386-1.61-.386-.995 0-1.86.37-2.583 1.107-.375.38-.662.81-.86 1.308-.224.515-.33 1.06-.318 1.634 0 .598.122 1.17.37 1.714.244.546.596 1.006 1.053 1.38.024.036.07.077.14.124.01.012.025.03.037.053.21.188.76.686 1.65 1.494l.844.775c1.688 1.53 2.87 2.61 3.55 3.23.54-.493 1.442-1.314 2.708-2.46 1.583-1.467 2.737-2.52 3.464-3.166l.038-.035c.446-.363.798-.815 1.055-1.354.26-.562.386-1.154.386-1.775 0-.58-.105-1.12-.316-1.64-.2-.49-.486-.925-.86-1.3-.727-.726-1.59-1.09-2.585-1.09-.563 0-1.1.126-1.61.378s-.94.613-1.292 1.082z" fill="rgba(51, 74, 108, 0.65)" fill-rule="evenodd" opacity="0" class="outline"></path><path d="M17.58 3.234c.28.68.42 1.395.42 2.145 0 .82-.17 1.59-.51 2.32-.34.723-.814 1.34-1.423 1.842-.445.41-1.594 1.46-3.445 3.146L9.44 15.592c-.13.105-.275.158-.44.158-.163 0-.31-.05-.44-.156-.573-.516-2.08-1.893-4.516-4.13C2.884 10.407 2.22 9.81 2.057 9.67c-.047-.048-.1-.095-.158-.14C1.3 9.02.84 8.41.51 7.69.182 6.97.012 6.205 0 5.396c-.01-.738.13-1.453.423-2.144.27-.656.656-1.236 1.16-1.74C2.567.504 3.745 0 5.116 0c.75 0 1.462.164 2.136.492.673.328 1.256.79 1.75 1.39.49-.6 1.074-1.062 1.748-1.39C11.424.164 12.135 0 12.885 0c1.372 0 2.55.498 3.534 1.494.5.504.89 1.084 1.16 1.74z" fill="#F71700" fill-rule="evenodd" opacity="1" class="heart"></path></svg></div></button>
            <button class="WiM0L"><div class="_32tSU oech5"><svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17" class="_32tSU oech5"><g fill="rgba(51, 74, 108, 0.65)" fill-rule="evenodd"><path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"></path></g></svg></div></button>
            <user params="user: user, published_at: published_at"></user>
            <div class="_2OqId">
                <div class="_FT34Y"></div>
                <div class="_KL89E" data-bind="html: html_content"></div>
            </div>
            <div class="W6jQs" data-bind="visible: image">
                <div class="_1KXFt">
                    <div class="_3WIsa YRuUa _242Fk">
                        <img data-bind="attr: { src: image }" role="presentation" class="_2PoG-" />
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="_2PRiK">
                    <path fill="rgba(255, 255, 255, 1)" fill-rule="evenodd" d="M5.52 6.58L1.5 2.56v.66a.75.75 0 1 1-1.5 0V.8C0 .4.33.05.74.04L3.2 0a.75.75 0 1 1 .03 1.5l-.67.01 4.01 4.01a.75.75 0 0 1-1.06 1.06m7.1 0l4.02-4.02v.66a.75.75 0 1 0 1.5 0V.8a.75.75 0 0 0-.74-.75L14.93 0a.75.75 0 1 0-.03 1.5l.67.01-4.01 4.01a.75.75 0 0 0 1.06 1.06m-7.1 5.1L1.5 15.7v-.66a.75.75 0 1 0-1.5 0v2.43c0 .41.33.75.74.75l2.47.04a.75.75 0 1 0 .03-1.5h-.67l4.01-4.02a.75.75 0 0 0-1.06-1.06m7.1 0l4.02 4.02v-.66a.75.75 0 1 1 1.5 0v2.43c0 .41-.33.75-.74.75l-2.47.04a.75.75 0 1 1-.03-1.5h.67l-4.01-4.02a.75.75 0 0 1 1.06-1.06"></path>
                </svg>
            </div>
            <div class="BNBMP">
                <div class="_1aSFb">4 hours ago</div>
                <div class="_22SkP" data-bind="click: $parent.reply"><button>Reply </button></div>
            </div>
            <div class="_55ghi">
                <reply-form params='comment: $data, user: user, callback: $parent.update'></reply-form>
            </div>
            <div data-bind="if: comments.length > 0">
                <comments params='comments: comments, type_id: comments.id, level: 1, root: $root'></comments>
            </div>
            <!-- ko if: $parent.level() > 0 && $index() === 0 && $parent.isList() == false -->
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" class="_1CwzX">
                <g fill="rgba(51, 74, 108, 0.65)" fill-rule="evenodd">
                    <path d="M12.57 6.5H1.54V1.54h1.17A.77.77 0 0 0 2.7 0H.77A.77.77 0 0 0 0 .77v6.46c0 .42.34.77.77.77h11.77l.03-1.5z"></path>
                    <path d="M13.82 6.7l-4.5-4.5a.77.77 0 1 0-1.08 1.1l3.11 3.12.87.73-.72.84-3.2 3.2a.77.77 0 0 0 1.09 1.1l4.46-4.47c.3-.3.3-.79 0-1.09l-.03-.02"></path>
                </g>
            </svg>
            <!-- /ko -->
        </li>
        <!-- /ko -->
        <!-- ko if: $parent.level() > 0 -->
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" class="_1CwzX"><g fill="#020302" fill-rule="evenodd"><path d="M12.57 6.5H1.54V1.54h1.17A.77.77 0 0 0 2.7 0H.77A.77.77 0 0 0 0 .77v6.46c0 .42.34.77.77.77h11.77l.03-1.5z"></path><path d="M13.82 6.7l-4.5-4.5a.77.77 0 1 0-1.08 1.1l3.11 3.12.87.73-.72.84-3.2 3.2a.77.77 0 0 0 1.09 1.1l4.46-4.47c.3-.3.3-.79 0-1.09l-.03-.02"></path></g></svg>
        <!-- /ko -->
    </ul>
</template>
<template id='reply-form-template'>
    <div class="ivfOh _3ZzkS">
        <form class="_33rbn ODDw0" data-bind="submit: saveReply">
            <div data-bind="fileDrag: fileData" class="filedrag">
                <div class="_3hgGE" data-bind="visible: fileData().dataURL">
                    <button class="_1Zj5n _1PzVp" type="button">
                        <svg width="10" height="10">
                            <path fill="none" stroke="rgba(51, 74, 108, 0.65)" stroke-linecap="square" stroke-width="2" d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                        </svg>
                    </button>
                    <img class="b00q8" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                </div>
                <div class="_3oju3">
                    <div class="_2bXVy">
                        <div tabindex="-1" class="_3F6QL _2WovP">
                            <textarea placeholder="Type a response..." class="_2S1VP" data-bind="value: replyText, valueUpdate: 'afterkeyup', event: { focus: checkAuth }" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true">Type a response</textarea>
                        </div>
                    </div>
                    <button class="_2LRWs _1kqns" data-bind="click: cancel" type="button">Cancel</button>
                    <button class="_2lkdt" type="submit" data-bind="enable: canSubmitReply" disabled="">
                        <span data-icon="send" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="rgb(107, 203, 239)" fill-opacity=".45" d="M1.101 21.757L23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="_3FA_l">
                    <div class="_29E8b">
                        <label for="media-upload" class="NOB1F">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="rgb(107, 203, 239)" fill-opacity=".5" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg>
                        </label>
                        <input type="file" name="media-upload" id="media-upload" data-bind="fileInput: fileData" accept="image/*">
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>