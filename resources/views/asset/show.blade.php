@extends('layouts.asset', ['id' => 'asset-show-view-template'])

@section('content')
    <?php $publishedAt = Carbon\Carbon::now()->subDays(47)->format('d M Y') ?>
    <h1 class="_3BaWr" data-reactid="69">ALTFOOTBALL TERMS AND POLICIES_</h1>
    <template id="terms-template">
        <div class="_344b1 _5X5FD">
            <h2 data-bind="css: { '_3h-Nf': selected() == 'one' }, click: select.bind($data, 'one')">
                Community Guidelines
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                </svg>
            </h2>
            <div data-bind="css: { '_45-A3': selected() == 'one' }">
                <div class="_1Q_Pu">
                    <p class="_25BgE">
                        <span><span></span></span>
                    </p>
                    <p class="C8E2s"><span><span>Date of Last Revision: {{ $publishedAt }}</span></span>
                    </p>
                    <p class="C8E2s"><span><span>This document sets out the Community Guidelines that applies to your use of ALTFOOTBALL and any videos, photographs, message or any other content that you may upload (â€œContentâ€) and the Original Content.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>â€œOriginal Content" is the videos and other content posted by or created by us (ALTFOOTBALL Limited) our directors and employees, and our group companies, including but not limited to content featuring our presenters, including Rio Ferdinand, Gary Neville or Jamie Carragher. Original Content may only be shared within ALTFOOTBALL or via other social media platforms as part of the sharing functionality on ALTFOOTBALL. Original Content may not be independently downloaded, copied, streamed, broadcast or otherwise used without our prior written consent.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>When using ALTFOOTBALL you are expected to comply with these Community Guidelines, and we may, in addition to any other legal right or remedy, revoke your access in accordance with our Terms of Use for any breach of these Community Guidelines. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>We may update the Community Guidelines from time to time and will bring any updates to your attention. Your continued use of ALTFOOTBALL will be deemed your acceptance of any update to the Community Guidelines.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>1. SUBMITTING CONTENT </span></span></h3>
                    <p class="C8E2s"><span><span>1.1. When you upload Content to ALTFOOTBALL, you agree that your Content will comply with these Community Guidelines. You agree that your Content will not:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.1. be unlawful; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>By way of example only, your content will not promote, feature, facilitate or condone any material or activity which is unlawful such as violence, speeding or generally committing a crime.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.2. infringe third party rights;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>By way of example only, your Content will not infringe any intellectual property rights (for example but not limitation such as copyright or trade mark) or other rights such as privacy, publicity, personal data rights, or any contractual right.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>You will be responsible for ensuring that any persons, locations or content such as music appearing in or which forms part of your Content has consented to such use. Please respect other people's intellectual property.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.3. be inappropriate or otherwise be objectionable by us.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>By way of example only, your Content will not be abusive of any person, or contain malicious, bullying, or violent, fraudulent, pornographic, homophobic, defamatory, libellous, discriminatory, obscene or racist material.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Nor will you use the service to bully, harasses or otherwise maliciously target any person.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.4. contain any viruses, Trojans or other malicious, harmful or tracking code.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Just donâ€™t.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.5. contain any marketing or commercial promotions or adverts.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>By way of example, your content shall not be a paid for or sponsored promotion, nor will you include any advert pop ups or pre or post-rolls. If you are interested in using the Service to commercially promote or share information about products or services, please get in touch with us at hello@altfootball.com.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.6. suggest any endorsement by us or any of our presenters, including Rio Ferdinand, Gary Neville or Jamie Carragher.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>2. USE OF ORIGINAL CONTENT AND USERSâ€™ CONTENT</span></span></h3>
                    <p class="C8E2s"><span><span>2.1. You may only use and watch Original Content and usersâ€™ Content uploaded onto ALTFOOTBALL by as permitted by us. You may watch, view and stream Original Content and usersâ€™ Content on the ALTFOOTBALL website and apps. You may also share Original Content and usersâ€™ Content using the ALTFOOTBALL social media sharing functionality and by linking to the ALTFOOTBALL video page using the functionality made available by us.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.2. You may not copy, download, or embed any Original Content or usersâ€™ Content without the express written permission of the content owner.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.3. You may not embed the ALTFOOTBALL video player in any other website.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.4. You may not use any Original Content or other usersâ€™ Content for any commercial purposes, or any public performances.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>3. ACCOUNTS</span></span></h3>
                    <p class="C8E2s"><span><span>3.1. When you create an account all information you supply must be truthful and accurate about you only.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.2. You shall not use or set up an account to imposter any other person, or to set up fake or â€˜botâ€™ style accounts.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3. Profile user names do not need to be your real name, but cannot be chosen or used which: </span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.1. are trade marks of a third party;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.2. are offensive;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.3. may breach these Community Guidelines in any other manner as we may reasonably decide.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.4. Profile user names cannot be sold, transferred or licensed without our prior written consent.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.5. You may only use your account in accordance with the Terms of Use, and you may not operate a competition or commercial activity without our prior written approval.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>5. COMPLAINTS:</span></span></h3>
                    <p class="C8E2s"><span><span>5.1. If you spot material on the Service which you believe contravenes these Community Guidelines or is otherwise objectionable please notify us at as set out in clause 9 of the Terms of Use.</span></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="_344b1 mv9zs">
            <h2 data-bind="css: { '_3h-Nf': selected() == 'two' }, click: select.bind($data, 'two')">
                Terms of Use
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                </svg>
            </h2>
            <div data-bind="css: { '_45-A3': selected() == 'two' }">
                <div class="_1Q_Pu">
                    <h2 class="_1PQQ2"><span><span></span></span></h2>
                    <p class="C8E2s"><span><span>Date of Last Revision: {{ $publishedAt }}}</span></span>
                    </p>
                    <p class="C8E2s"><span><span>IMPORTANT NOTICE: </span></span>
                    </p>
                    <p class="C8E2s"><span><span>The following Terms of Use â€œ(Terms of Useâ€) apply to all use, download and installation of the ALTFOOTBALL website and apps (â€ALTFOOTBALLâ€) as made available by ALTFOOTBALL Limited.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Where certain clauses of these Terms of Use only apply in particular circumstances, for example to use the ALTFOOTBALL iOS App, those circumstances are explained below.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING ALTFOOTBALL, AS IT EXPLAINS HOW YOU ARE LICENSED TO USE ALTFOOTBALL. IF YOU HAVE QUERIES CONCERNING THESE TERMS OF USE YOU MAY CONTACT US AT hello@altfootball.com. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>USE OF ANY PART OF ALTFOOTBALL, IS ALSO SUBJECT TO OUR PRIVACY AND COOKIE POLICY AND COMMUNITY GUIDELINES.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>BY USING ALTFOOTBALL YOU ARE TELLING US THAT YOU ACCEPT AND AGREE TO BE BOUND BY THESE TERMS OF USE, PRIVACY POLICY AND ALTFOOTBALL GUIDELINES. IF YOU DO NOT ACCEPT OR UNDERSTAND THESE TERMS OF USE OR ANY PART OF THEM, YOU SHOULD NOT USE OR ACCESS ALTFOOTBALL OR ANY PART OF IT. THESE TERMS OF USE FORM A LEGALLY BINDING AGREEMENT.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>IF YOU ARE UNDER THE AGE OF 18 AND DO NOT UNDERSTAND THIS DOCUMENT PLEASE ASK A PARENT OR GUARDIAN TO EXPLAIN ITS MEANING TO YOU.  IF YOU ARE UNDER THE AGE OF 13 YOU MAY NOT USE ALTFOOTBALL.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>1. INTRODUCTION</span></span></h3>
                    <p class="C8E2s"><span><span>1.1. ALTFOOTBALL is owned and operated by ALTFOOTBALL Limited, referred to as â€œusâ€, â€œweâ€, and â€œourâ€ in these Terms of Use. We are a company registered in England, with our registered office at Eastside, Kings Cross, London, N1C 4AX. </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>2. IMPORTANT NOTE ABOUT MOBILE DATA USAGE</span></span></h3>
                    <p class="C8E2s"><span><span>2.1. Please note that your use of ALTFOOTBALL requires an internet connection. We recommend you use a Wi-Fi service rather than mobile data connection if you have a limited mobile data package, and we are not responsible for the use of your data package and any additional costs you may incur. Streaming videos can use large amounts of data and you should therefore switch to Wi-Fi data connections where possible.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>3. DETAILS ON SETTING UP AN ACCOUNT</span></span></h3>
                    <p class="C8E2s"><span><span>3.1. You may need to set up an account in order to use and access some of ALTFOOTBALL. To set up an account you will need to register using your Facebook account. We will process the information you give us in setting up an account in accordance with our Privacy Policy.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.2. Your username and password is personal to you and you should not share it or disclose it to any third party without our prior written permission.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3. You agree that:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.1. you will ensure that the information we hold about you is accurate and up to date;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.2. you are solely responsible for maintaining the confidentiality of your account details;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.3. you are solely liable for any use of ALTFOOTBALL using your account;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.4. all user information you supply is accurate and truthful about you, and you shall not set up an imposter or fake account for any other person</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.4. Your account details and use of your account must comply with our Community Guidelines [link].</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.5. WE ARE NOT LIABLE FOR ANY IMPROPER USE OF YOUR ACCOUNT OR ANY USE OF YOUR ACCOUNT BY ANY THIRD PARTY. IF YOU THINK YOUR ACCOUNT HAS BEEN COMPROMISED PLEASE INFORM US IMMEDIATELY.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.6. In the event that you breach any provision of these Terms of Use or Community Guidelines, we may suspend or delete your access to ALTFOOTBALL and/or remove content created/uploaded by you.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>4. ABOUT THE OWNERSHIP OF ALTFOOTBALL AND ORIGINAL CONTENT.</span></span></h3>
                    <p class="C8E2s"><span><span>4.1. Subject to the retained ownership of Content (which is owned by the user), all right, title, interest and ownership rights and any copyright, design right, database right, patents and any rights to inventions, know-how, trade and business names, trade secrets and trade marks (whether registered or unregistered) and any applications therefor and other intellectual property rights (together â€œIntellectual Property Rightsâ€) in ALTFOOTBALL website and apps belongs to us and/or our licensors. All rights are asserted and reserved, save for those granted under these Terms of Use. ALTFOOTBALL may contain licensed materials and our licensors may act to protect their interests in the event of any breach of these Terms of Use</span></span>
                    </p>
                    <p class="C8E2s"><span><span>4.2. Subject to your compliance with all conditions of these Terms of Use, we grant you a non-exclusive, personal, revocable, non-transferable licence to (i) stream and view the Content and Original Content for your own private, personal and non-commercial use on ALTFOOTBALL and (ii) to share the Content and Original Content in accordance with the social media functions made available by us on ALTFOOTBALL and the licence under these Terms of Use.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>4.3. We retain and reserve all rights in the videos and other content posted by us, our directors and employees (â€œOriginal Contentâ€), including but not limited to content created by us or any of our group companies or featuring our presenters, including Rio Ferdinand, Gary Neville or Jamie Carragher. Original Content may be viewed by you on ALTFOOTBALL and shared using the social media functionality made available on ALTFOOTBALL. You may not copy, broadcast or use the Original Content for any other purposes without our prior written consent. All our rights on the Original Content are reserved by us.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>5. HOW WE USE YOUR UPLOADED CONTENT  (I.E VIDEOS, PHOTOS, COMMENTS ETC)</span></span></h3>
                    <p class="C8E2s"><span><span>5.1. As an account holder, you may upload video content, photographs and other content to ALTFOOTBALL (â€œContentâ€).</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.2. You shall retain ownership of your posted Content, but you will be granting us certain rights to use your content as set out in clause 5.7 of these Terms of Use.  This means that you are free to reuse your Content on any other website.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.3. You are solely responsible for ensuring that you own all necessary rights and have obtained all necessary permissions relating to the Content so as to be able to grant us the rights set out in these Terms of Use.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.4. We do not endorse any Content, nor do we endorse any opinion, recommendation or advice expressed in the Content. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.5. By uploading Content, you agree that your Content complies with these Terms of Use and our Community Guidelines.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.6. We do not review any Content before it is submitted by users, and you may therefore be exposed to content which is inaccurate, false, offensive, illegal or indecent. In the event that you become aware of any Content that is contrary to the Community Guidelines or these Terms of Use, please contact us via the details set out at clause 9.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.7. Your licence to us (and our group companies) to use your Content:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>By uploading your Content to ALTFOOTBALL, you grant us (and our group companies) all necessary rights, licenses and permissions to:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>(1)	use, copy, edit, stream, distribute, store, share and generally make available and exploit your Content on ALTFOOTBALL; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>(2)	to allow us to grant other users of ALTFOOTBALL the right to view and share your Content on ALTFOOTBALL and via other website and social media sites using ALTFOOTBALL sharing and embedding functionality. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>(3)	use your Content to promote ALTFOOTBALL online, and for this purpose, you allow us to create derivatives and edits of your Content, and combine it with other users' Content and Original Content. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>The licence you grant to us is:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>a.	on a non-exclusive basis, meaning you can use your own Content elsewhere; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>b.	royalty free, meaning that we do not pay you for uploading your Content and granting us the rights to use your Content; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>c.	is sub-licensable and transferable by us, so that we can grant necessary licences and permissions to enable us to provide the ALTFOOTBALL and generally exploit the rights you grant us;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>d.	on a worldwide basis, so that we can make the content available via the internet and without any other country restrictions:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>e.	can be ended by you on written notice to us, save that you acknowledge that certain content that you upload will remain on ALTFOOTBALL as set out in clause 5.8 below and that we may continue to use your content in any promotional or marketing content created by us.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Whilst we may, in future, place advertising on ALTFOOTBALL or introduce adverts in the ALTFOOTBALL video player before, during or after your Content, we will not sell your Content to any third party. If we do allow advertising on ALTFOOTBALL then we may put in place a revenue share arrangement so that you can share in advertising revenue generated from your Content, and we will update you on our plans if and when such an arrangement comes into force.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.8. You may delete your Content from ALTFOOTBALL using your account profile. However, our right to continue to use your Content outside of ALTFOOTBALL for promotional purposes shall continue as set out above.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.9. We shall be entitled to remove, restrict or suspend or alter your account and any Content (and the ability to share or create Content) for any reason in our discretion including, without limitation, because conduct or Content associated with such account or is or may be in breach of these Terms of Use or Content Guidelines.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.10. You agree we may use, publish, edit, modify and adapt the Content you make available, or post to or transmit to ALTFOOTBALL to enable us to exercise the rights granted under these Terms of Use.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.11. You agree that we do not have to credit any persons or other media in your Content, and you waive all so called moral rights in the Content. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.12. You agree and undertake that you are entitled to make available the Content and licence it and grant us the rights set out in these Terms of Use, and that your Content complies with our Community Guidelines (as may be updated from time to time). </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>6. ALTFOOTBALL GUIDELINES</span></span></h3>
                    <p class="C8E2s"><span><span>6.1. The purpose of ALTFOOTBALL is to create a destination for vehicle enthusiasts to post and share stories, videos and photographs of vehicles, and discuss vehicles generally, as part of the Tribes set up by Tribe Leaders.  We want ALTFOOTBALL to become the place to visit on the internet for vehicle enthusiasts, and as part of this we have introduced a set of guidelines that all users of ALTFOOTBALL must follow to keep a bit of law and order. We will be a community driven site but controlled by us in keeping with the Terms of Use and Community Guidelines. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.2. Your Content, Account and use of ALTFOOTBALL must therefore comply with the Community Guidelines which are incorporated by reference here, and available for review by you here.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.3. Any breach by you of any part of the Community Guidelines will be a breach of these Terms of Use.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.4. You agree we have no responsibility to review the contents of any Content before it is made available on ALTFOOTBALL.  For the avoidance of doubt, the views expressed in any Content are the views of the individual authors and not those of us unless expressly specified otherwise by us.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.5. IT IS A KNOWN RISK OF INTERNET USAGE THAT PEOPLE ARE NOT NECESSARILY WHO THEY SAY THEY ARE. PEOPLE MAY PROVIDE INFORMATION OR BEHAVE IN A WAY THAT IS UNRELIABLE, MISLEADING, UNLAWFUL OR ILLEGAL. WE HAVE NO WAY OF TELLING IF STATEMENTS MADE BY OTHER USERS ARE TRUE.  THIS IS A DECISION THAT CAN ONLY BE MADE BY YOU. YOU SHOULD THEREFORE EXERCISE SOME DEGREE OF CAUTION WHEN USING ANY WEBSITE. BY USING ALTFOOTBALL YOU ACCEPT THAT THIS IS THE CASE AND ACCEPT THAT YOU THEREFORE USE ALTFOOTBALL AT YOUR OWN RISK. PLEASE TAKE PARTICULAR CARE IN RELATION TO THE DISCLOSURE OF YOUR OWN PERSONAL INFORMATION SUCH AS YOUR SURNAME, ADDRESS, EMAIL ADDRESS, TELEPHONE NUMBER AND PLACES YOU GO.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>7. CLICKING ON LINKS TO WEBSITES</span></span></h3>
                    <p class="C8E2s"><span><span>7.1. Where we make available links to other websites or apps through ALTFOOTBALL, such links are provided for your information and convenience only. We are not responsible for the content or performance of the linked website or app, and you are responsible for reviewing the linked websiteâ€™s or appâ€™s Terms of Use.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>8. NECESSARY SYSTEM AND PLATFORM REQUIREMENTS</span></span></h3>
                    <p class="C8E2s"><span><span>8.1. Apps made available as part of ALTFOOTBALL are developed to work on the version of the operating system and/or device platform available at the time of their release or such other version as may be notified to you when obtaining the apps. Platform, operating system and device vendors may from time to time update their software and/or devices, and we may, but shall not be obligated to, update ALTFOOTBALL if necessary to ensure that its functionality and performance continue with any such update. It is your obligation to ensure that you are using the latest compatible public release of any such device, operating system or platform. We may require you to update your apps and other software to continue using ALTFOOTBALL.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.2. Your access to or use of ALTFOOTBALL or certain features of it may require you to have an Apple iTunes, Google Play or other account with a third party or with us. Your access to and use of ALTFOOTBALL may be linked to your Apple, Google, or other account and you are required to comply with the Terms of Use which apply to any such account in order to use ALTFOOTBALL.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.3. You may require an internet connection, which you must procure at your own expense, to use some features of ALTFOOTBALL.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4. By installing or using any apps distributed as part of ALTFOOTBALL (â€œAppâ€ below) on iOS you agree that these terms (which we are required by Apple to incorporate) shall apply:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.1. Acknowledgement: You and we acknowledge that these Terms of Use constitutes an agreement which is concluded between you and us only, and not with Apple Inc, nor any subsidiary or affiliate company of Apple Inc, (â€œAppleâ€). You also acknowledge that we are solely responsible for the App and the content within the App.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.2. Grant of Licence:  Subject to, and in consideration of, your compliance with all conditions of these Terms of Use we grant you a non-exclusive, personal, revocable, non-transferable license to use the App and content in the App for your lifetime on an iOS product which you own or control, and as permitted by the usage rules set forth in the App Store Terms (</span><span><a class="" href="http://www.apple.com/uk/legal/terms/" rel="nofollow" target="blank">www.apple.com/uk/legal/terms/</a></span><span> ), and in accordance with our Privacy Policy.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.3. Maintenance and Support: We are solely responsible for providing support and maintenance for the App. You and we acknowledge that Apple has no obligation whatsoever to furnish any maintenance and support services with respect to the App.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.4. Product Claims: You acknowledge that we, and not Apple, are responsible for addressing any claims you may have relating to the App or your possession and/or use of the App, including but not limited to: (i) product liability claims; (ii) any claim that the App fails to conform to any applicable legal or regulatory requirement, and (iii) claims arising under consumer protection or similar legislation. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.5. Intellectual Property Rights: You acknowledge that in the event of a third party claim that the App, or your possession and use of the App infringes that third partyâ€™s intellectual property rights, then we shall be solely responsible for the investigation, defence, settlement and discharge of any such intellectual property right infringement claim, and not Apple.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.6. Legal Compliance: You represent and warrant that: (i) you are not located in a country that is subject to a US Government embargo, or that has been designated by the US Government as a â€œterrorist supportingâ€ country, and (ii) you are not listed on any US Government list of prohibited or restricted parties.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>8.4.7. Third Party Beneficiary: You acknowledge and agree that Apple, and Appleâ€™s subsidiaries, are third party  beneficiaries of these Terms of Use, and that when you accept the Terms of Use of these Terms of Use, Apple will have the right (and will be deemed to have accepted the right) to enforce these Terms of Use against you.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>9. COPYRIGHT INFRINGEMENT &amp; BREACH OF COMMUNITY GUIDELINES</span></span></h3>
                    <p class="C8E2s"><span><span>9.1. In the event that you consider that any content infringes your intellectual property or other proprietary rights, please notify us by email to copyright@altfootball.com setting out full details of the infringed rights or breach of the Community Guidelines.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2. When reporting any instances of copyright or other proprietary rights infringement, or other breach of the guidelines, please include the following information:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.1. An electronic or physical signature of the person authorised to act on behalf of the owner of the copyright protected content; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.2. A description of the copyrighted protected content that you believe has been infringed upon; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.3. A full description of where on ALTFOOTBALL the alleged infringing content can be found (including the relevant URL); </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.4. Your address, telephone number, and e-mail address so that we may contact you; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.5. A statement by you that in your reasonable belief the use of the content is not authorised by the copyright owner, its agent, or the law; </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2.6. A statement by you that the information contained in this notice, and any other information we may reasonably require from you in order to enable us to resolve the issue of copyright infringement (whether actual or alleged) is accurate and that you are either the copyright owner or authorised to act on the copyright owner's behalf. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.3. Please note that when issuing any complaints regarding the content, then such an action is initiating a legal claim process. We may require you to provide further details or evidence before we can act upon your claim.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>10. INDEMNITY / COMPENSATION TO US</span></span></h3>
                    <p class="C8E2s"><span><span>10.1. Without limiting our other legal rights and remedies, you agree to indemnify (compensate) us and keep us indemnified from and against all claims, damages, expenses, costs and liabilities (including legal fees) relating to or arising from your use of ALTFOOTBALL or arising from any breach or suspected breach of these Terms of Use by you or your violation of any law or the rights of any third party.Without limiting our other legal rights and remedies, you agree to indemnify (compensate) us and keep us indemnified from and against all claims, damages, expenses, costs and liabilities (including legal fees) relating to or arising from your use of ALTFOOTBALL or arising from any breach or suspected breach of these Terms of Use by you or your violation of any law or the rights of any third party.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>11. TERM AND TERMINATION</span></span></h3>
                    <p class="C8E2s"><span><span>11.1. These Terms of Use takes effect upon your download, installation and/or use of any part of ALTFOOTBALL and remain effective until terminated by either of us. You may terminate these Terms of Use at any time by deleting all copies of apps and other materials received by you through ALTFOOTBALL and by ceasing to use ALTFOOTBALL. The Terms of Use shall automatically terminate if you fail to comply with any term or condition of these Terms of Use. Upon termination you shall cease all use of ALTFOOTBALL and delete all copies of apps and other materials received by you through ALTFOOTBALL. Termination shall not affect any accrued rights or obligations up to the time such termination becomes effective.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>12. SUPPORT AND CONTACTING US</span></span></h3>
                    <p class="C8E2s"><span><span>12.1. If you need any help and support please email hello@altfootball.com and we shall endeavour to assist you. </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>13. THIRD PARTY SERVICES</span></span></h3>
                    <p class="C8E2s"><span><span>13.1. We may link to, incorporate or use third party software and services such as social networking or sharing features within ALTFOOTBALL. Use of any such software or service is subject to the terms of those third parties, and you agree to comply with any such third party Terms of Use when using ALTFOOTBALL.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>14. OUR LIMITATIONS OF LIABILITY</span></span></h3>
                    <p class="C8E2s"><span><span>14.1 ALTFOOTBALL is provided â€˜AS ISâ€™ and on an â€˜AS AVAILABLEâ€™ basis without any representation, endorsement or warranty of any kind OTHER THAN THAT IT WILL BE OF SATISFACTORY QUALITY, AS DESCRIBED, AND FIT FOR PURPOSE.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.2. We do not guarantee that ALTFOOTBALL will be (i) free of errors, viruses or bugs or other defects; or (ii) that ALTFOOTBALL or any information displayed or distributed through ALTFOOTBALL or in the ACCOMPANYING Documentation will be accurate or complete; or (iii) that any defects in ALTFOOTBALL will be corrected; OR (IV) THAT OPERATION OF ALTFOOTBALL WILL BE UNINTERRUPTED. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.3. WE SHALL HAVE NO LIABILITY IN RESPECT OF THE CONTENT, TRANSMISSION, RECEIPT, HOSTING, PROCESSING OR OTHER USE OF ANY CONTRIBUTION.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.4. You acknowledge that USE OF ALTFOOTBALL OR reliance on any CONTRIBUTION OR information OBTAINED THROUGH ALTFOOTBALL shall be at your sole risk.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.5. NOTHING IN THESE TERMS OF USE SHALL EXCLUDE OR LIMIT OUR LIABILITY FOR FRAUDULENT MISREPRESENTATIONS OR FOR DEATH OR PERSONAL INJURY RESULTING FROM OUR NEGLIGENCE OR THAT OF OUR EMPLOYEES OR AGENTS. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.6. TO THE FULLEST EXTENT PERMISSIBLE BY LAW, INCLUDING IN YOUR LOCAL JURISDICTION, WE EXCLUDE ALL OTHER LIABILITY FOR ANY LOSS OR DAMAGE, INCLUDING ANY LIABILITY OR DAMAGE TO ANY DEVICE OR COMPUTER SYSTEM (SAVE TO THE EXTENT THAT DAMAGE TO YOUR DEVICE OR OTHER DIGITAL CONTENT WHICH YOU OWN IS CAUSED BY ALTFOOTBALL AS A RESULT OF OUR FAILURE TO USE REASONABLE CARE AND SKILL IN WHICH CASE YOU MAY BE ENTITLED TO COMPENSATION OR WE MAY BE OBLIGED TO REPAIR YOUR DEVICE).</span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.7. nothing in these Terms of Use shall limit your statutory consumer rights.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>14.8. our ENTIRE LIABILITY TO YOU, and to the extent we can not exclude it, WHERE PERMISSIBLE BY LAW, SHALL BE LIMITED TO Â£100.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>15. RESTRICTIONS</span></span></h3>
                    <p class="C8E2s"><span><span>15.1. Save where we have expressly agreed otherwise with you in a separate agreement, you may only use ALTFOOTBALL and Content for your personal, private and non-commercial use, and must not:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>15.1.1. sell, distribute, reproduce, transfer, publically display, translate, modify, adapt, create derivative works from, deconstruct, reverse engineer, decompile or disassemble, rent, lease, loan, sub-license or otherwise deal in copies or reproductions of ALTFOOTBALL, Original Content or Content of other users in any way except as expressly permitted by these Terms of Use;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>15.1.2. remove, delete, obscure, disable, modify, add to or tamper with any program code or data, copyright, trade mark or other proprietary notices and legends contained on or in ALTFOOTBALL or Original Content, Content of other users;</span></span>
                    </p>
                    <p class="C8E2s"><span><span>15.1.3. remove, disable or circumvent any copy protection software contained on or within ALTFOOTBALL or Original Content or Content.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>16. TRADE MARK</span></span></h3>
                    <p class="C8E2s"><span><span>16.1. â€œALTFOOTBALLâ€ is an unregistered mark used by us, and all rights are reserved by us.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>17. ENTIRE AGREEMENT</span></span></h3>
                    <p class="C8E2s"><span><span>17.1. These Terms of Use sets out the complete understanding and agreement between us and you in respect of its subject matter and may only be amended or waived in writing by us. </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>18. NO WAIVER</span></span></h3>
                    <p class="C8E2s"><span><span>18.1. No waiver by us of any failure by you to comply with or perform a provision of these Terms of Use shall constitute a waiver of any preceding or succeeding failure. </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>19. ASSIGNMENT</span></span></h3>
                    <p class="C8E2s"><span><span>19.1. These Terms of Use is personal to you. You may not assign, sub-license, transfer or dispose of your rights or obligations under this agreement.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>20. CHANGES TO THESE TERMS OF USE</span></span></h3>
                    <p class="C8E2s"><span><span>20.1. We may change these Terms of Use for any legal, regulatory or security reasons, or for any other reason we reasonably decide, including without limitation, where such change is required or encouraged by a third party service provider. We will notify you of any changes and you will be required to accept the changes to continue to use ALTFOOTBALL.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>21. SEVERANCE</span></span></h3>
                    <p class="C8E2s"><span><span>21.1. If any provisions of these Terms of Use are held to be invalid or unenforceable, the remaining provisions will remain in full force and effect.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>22. GOVERNING LAW AND JURISDICTION</span></span></h3>
                    <p class="C8E2s"><span><span>22.1. Subject always to applicable mandatory consumer protections including those of your country:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>22.1.1. in the event of any dispute between you and us regarding these Terms of Use and/or your use of ALTFOOTBALL, the laws of England and Wales will apply; and</span></span>
                    </p>
                    <p class="C8E2s"><span><span>22.1.2. you agree that in the event that we are unable to settle any dispute with you informally, then any court or arbitration proceedings shall be held in England.</span></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="_344b1 ZxFDK">
            <h2 data-bind="css: { '_3h-Nf': selected() == 'three' }, click: select.bind($data, 'three')">
                Privacy and Cookie Policy
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7">
                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                </svg>
            </h2>
            <div data-bind="css: { '_45-A3': selected() == 'three' }">
                <div class="_1Q_Pu">
                    <h2 class="_1PQQ2"><span><span></span></span></h2>
                    <p class="C8E2s"><span><span>Date of Last Revision: {{ $publishedAt }}</span></span>
                    </p>
                    <p class="C8E2s"><span><span>INTRODUCTION</span></span>
                    </p>
                    <p class="C8E2s"><span><span>ALTFOOTBALL is an online community for vehicle enthusiasts to create and join tribes of fellow enthusiasts. ALTFOOTBALL lets you share your enthusiasm and interest for all things drivable with users around the world by posting text, pictures, videos and other content and through our app and website.  The content you post, and your user profile, will be public, so make sure you donâ€™t share anything that youâ€™d like to keep private.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>CHILDREN</span></span>
                    </p>
                    <p class="C8E2s"><span><span>We do not knowingly collect personal information from persons under 13 years of age.  If you are younger than this, please do not use our websites or apps.  If you think we have collected personal information about someone who is younger than 13, please let us know.  </span></span>
                    </p>
                    <p class="C8E2s"><span><span>If you are less than 18 years old, please make sure that your parent or guardian has explained this privacy policy to you, and you agree with its contents, before using our websites or apps.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>THIS PRIVACY AND COOKIES POLICY</span></span>
                    </p>
                    <p class="C8E2s"><span><span>The following privacy and cookies policy (â€œPrivacy Policyâ€) sets out how we use data relating to you and applies to all use of your personal information by ALTFOOTBALL Limited, a company registered in England, with its registered office at Eastside, Kings Cross, London, N1C 4AX (â€œALTFOOTBALLâ€, â€œweâ€, â€œusâ€ and â€œourâ€). </span></span>
                    </p>
                    <p class="C8E2s"><span><span>This Privacy Policy forms a part of and should be read in conjunction with our Terms of Use, which can be found on our website here: </span><span><a class="" target="blank" href="http://www.altfootball.com/terms.">www.altfootball.com/terms.</a></span><span></span></span>
                    </p>
                    <p class="C8E2s"><span><span>This Privacy Policy (together with the documents referred to in it) sets out the basis on which any data we collect from you, or that you provide to us through our websites and/or our apps (together the â€œServiceâ€), will be processed by us. Please read the following carefully to understand our views and practices regarding your personal data and how we will treat it.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>This policy does not apply to practices of companies that we do not own or control, or to individuals that we do not employ or manage.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>We will only collect and process information about you in accordance with this Privacy Policy. By accessing the Service you authorise us to collect, store, access, transfer and use your information as described in this Policy.  We may make changes to this Policy in future, which will be posted on this page.  You should check this page from time to time to ensure you are aware of any changes.  Where appropriate we may notify you of changes by email or through our apps or websites.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>1. PERSONAL DATA WE MAY COLLECT ABOUT YOU</span></span></h3>
                    <p class="C8E2s"><span><span>1.1. Data you supply (â€œSubmitted Informationâ€) includes:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.1. We will obtain personal data about you (such as your name, address, telephone number, email address, photograph) whenever you contact us, register an account with us, submit material through a form, or via part of the Service, for example when you upload videos, we will obtain any personal data which is contained in those videos.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.1.2. We may also obtain sensitive personal data about you if you voluntarily supply it through the Service.  If you volunteer such information, you will be consenting to our processing it for the purpose indicated when you supply it.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.2. Data we collect includes:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.2.1. We may monitor your use of our Service through cookies and similar tracking technologies. For example, we may monitor how many times you visit, which pages you go to and which videos you watch, traffic data, your IP and MAC address, a unique device identifier, the browsers and devices you use to access our Service, your internet service provider, and the actions you take when using our Service (â€œAnalyticsâ€).</span></span>
                    </p>
                    <p class="C8E2s"><span><span>1.2.2. Our Service may also collect information which you make available to us and which is stored on your device, or your Facebook or other social media or similar profiles, including contact information, images, location, video or other digital content (â€œContent Informationâ€). Details of the information we collect from your Facebook or social media account will be notified to you when you first grant us permission to access your account.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>2. HOW WE USE YOUR PERSONAL DATA</span></span></h3>
                    <p class="C8E2s"><span><span>2.1. We will use your personal data for the purposes described to you at the time your data were obtained, and for the following purposes:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.1.1. Submitted Information: to help us identify you and to open, run and monitor any accounts you hold with us; for administration; to process your enquiries; to monitor and distribute videos and other material you contribute through our Service; to provide personalised content, including promotional content; and to send you information about our Service.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.1.2. Analytics: to understand how, and how often, users use our Service, and to help us improve it.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.1.3. Content Information: to allow you to connect with friends and other users, to share videos and other contributions you might make, and to make it easier for you to use the Service, for example by pre-populating forms and user accounts.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.2. We may associate any category of information with any other category of information and will treat the combined information as personal data in accordance with this policy for as long as it is combined.  We will only use information collected about you in accordance with the Data Protection Act 1998.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.3. We do not disclose information about identifiable individuals to advertisers, but we may provide them with anonymous aggregate information about our users (for example, we may inform them that 500 men aged under 30 have clicked on their advertisement on any given day). We may also use such aggregate information to help advertisers reach the kind of audience they want to target (for example, women in London). We may make use of the personal data we have collected from you to enable us to comply with our advertisers' wishes by displaying their advertisement to that target audience.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>2.4. We may also use your submitted data to serve personalised content which we believe may be of interest you or to serve relevant advertising to you based on your personal data held by us.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>3. DISCLOSURE OF YOUR INFORMATION</span></span></h3>
                    <p class="C8E2s"><span><span>3.1. We may disclose some or all of the data we collect from you when you download or use the Service:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Submitted Information:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>We may share your name and email address with the email service providers we use to keep you updated with news about our Service, and with other third parties we use (who process your Submitted Information in accordance with our instructions) including for the purpose of live chat, marketing, feedback and support.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Information which you include within your public profile, or which you share through forums and other interactive messaging features through our Service, will be shared with other users of the Service.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Analytics:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Analytics information may be shared with advertisers on an anonymous aggregate basis.  We may also publicise anonymous, aggregate statistics through our websites or other channels although this will not include your personal data. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>Our Service integrates with third party analytics providers who process the Analytics information we collect in accordance with our instructions, including to: track technical errors which arise from your use of the Service; monitor the performance of the Service; monitor how you use our Service including the actions you take when using our apps and websites. Data shared with Analytics providers will be processed by them for our use only, save that they may create their own reports on an anonymous and aggregated basis.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Content Information:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>The videos, photographs, posts and other content you submit through the Service will be shared publically.  In some cases you may be able to select specific recipients (for example if you are sending a private message, or sharing a video with a particular individual) then only those recipients will receive it, however in all other cases, the videos and posts you share may be made publically available. Where you allow the Service to access your geo-location, that information will be used to make the content displayed to you through the Service more relevant to you. You may also tag your Content Information, in which case your approximate location (or any other tags you apply) will be visible to the public.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.2. We may disclose your personal information to any member of our group, which means our subsidiaries, our ultimate holding company and its subsidiaries, as defined in section 1159 of the Companies Act 2006.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3. We may also disclose your personal information to third parties:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.1. In the event that we sell or buy any business or assets, in which case we may disclose your personal data to the prospective seller or buyer of such business or assets.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.2. If we or substantially all of our assets are acquired by a third party, in which case personal data held by us about our customers will be one of the transferred assets.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.3. If we are under a duty to disclose or share your personal data in order to comply with any legal or regulatory obligation or request. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.4. In order to enforce or apply the terms of agreements between us, to investigate potential breaches, or to protect the rights, property or safety of us, our customers, or others. This includes exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>3.3.5. who are our external service providers as required to deliver and improve our Services.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>4. WHERE WE STORE YOUR PERSONAL DATA</span></span></h3>
                    <p class="C8E2s"><span><span>The data we collect from you may be transferred to, and stored at, a destination outside the European Economic Area (â€œEEAâ€). It may also be processed by staff that operate outside the EEA and work for us or our suppliers. These staff may be engaged in the maintenance of the Service, and the provision of support services. By submitting your personal data, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this privacy policy.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>5. INFORMATION SECURITY</span></span></h3>
                    <p class="C8E2s"><span><span>5.1. Where we have given you (or where you have chosen) a password that enables you to access certain parts of our Service, you are responsible for keeping this password confidential. We ask you not to share a password with anyone.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.2. We are committed to the security of your information and the data we hold. Unfortunately, the transmission and storage of information via the internet is not completely secure. Although we will do our best to protect your personal data, we cannot guarantee the security of your data transmitted or stored through our Service; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to try to prevent unauthorised access. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>5.3. When you share any Content with us, you should ensure that you are happy for that Content to be shared in case it contains personal information that you prefer to keep private. </span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>6. YOUR RIGHTS</span></span></h3>
                    <p class="C8E2s"><span><span>6.1. You can edit, delete and vary any profile information via your account page.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.2. If you believe we retain personal information about you that is incorrect please contact us and we shall correct the personal data as soon as reasonably practicable. If you would like to receive a copy of the information we have about you, please note that an administration fee of Â£10 may be applicable. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.3. If the Service includes your personal data, leading to damage or distress, or which you would like to have removed for other reasons, please let us know. We will endeavour to respond to your query as soon as possible, and expect to be in touch within 48 hours except in extraordinary cases.  Please note that we may ask you for further information, or take other steps to confirm your identity before processing your requests.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>6.4. You can contact us about your personal data and this policy at hello@altfootball.com.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>7. DELETING YOUR CONTENT AND DEACTIVATING YOUR ACCOUNT</span></span></h3>
                    <p class="C8E2s"><span><span>7.1. The Service allows you to delete content which you post and to deactivate your account.  </span></span>
                    </p>
                    <p class="C8E2s"><span><span>7.2. Please note that, if you deactivate your account, we will make your account unavailable to others.  </span></span>
                    </p>
                    <p class="C8E2s"><span><span>7.3. However, any Content which you have already shared through the Service may be retained on the Service.  For example, users may have shared your videos or you may have commented on other Content.  If you deactivate your account without deleting content, that content will remain permanently accessible through the Service, but may be marked anonymous. We shall also retain all anonymous data related to your account and use of the Service to enable us to continue to better understand how users use the Service. We will not be able to identify you from this data.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>8. EXTERNAL WEBSITES</span></span></h3>
                    <p class="C8E2s"><span><span>8.1. If you follow a link to any third party websites or services, please note that we do not accept any responsibility or liability for the collection, storage or use of personal data by those third parties, and you should check the applicable privacy policies before you submit any personal data to those websites or use these services.</span></span>
                    </p>
                    <h3 class="_1PQQ2"><span><span>9. COOKIES</span></span></h3>
                    <p class="C8E2s"><span><span>9.1. A cookie is a text file placed onto your device when you access our Service. We use cookies and other online tracking devices to deliver, improve and monitor our Service, including in the following ways:</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Authentication</span></span>
                    </p>
                    <p class="C8E2s"><span><span>To log you into our Service and keep you logged in.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Preferences</span></span>
                    </p>
                    <p class="C8E2s"><span><span>To remember information about you such as your preferred language and configuration.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>Analytics</span></span>
                    </p>
                    <p class="C8E2s"><span><span>To help us understand how you use our Service, and how often, so we can improve it to deliver a better experience for our users.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>To carry out research and statistical analysis to help improve our content, products and services.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>If you want to learn about how to opt out of Google Analytics, please visit the following URL: </span><span><a class="" href="https://tools.google.com/dlpage/gaoptout/" rel="nofollow" target="blank">tools.google.com/dlpage/gaoptout/</a></span><span> or change your Google Ads Settings.  You can find out more about how Google uses data here: </span><span><a class="" href="https://www.google.com/policies/privacy/partners/." rel="nofollow" target="blank">www.google.com/policies/privacy/partners/.</a></span><span></span></span>
                    </p>
                    <p class="C8E2s"><span><span>Retargeting</span></span>
                    </p>
                    <p class="C8E2s"><span><span>We may use cookies to display advertisements to you about products and services we offer, which we think will be of interest to you based upon your previous use of our Service.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.2. The information we obtain from our use of cookies will not usually contain your personal data. Although we may obtain information about your device such as your IP address, your browser and/or other internet log information, this will not usually identify you personally.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.3. Our websites display a notice alerting you to our use of cookies and other similar technologies and linking to this privacy policy. By using our websites after this notice has been displayed to you, you are letting us know that you consent to our use of cookies or similar technologies for the purposes described in this privacy policy.</span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.4. Please note that, if you choose to disable cookies or similar technologies on your device, you may be unable to make full use of our Service. </span></span>
                    </p>
                    <p class="C8E2s"><span><span>9.5. We work with third parties who may also place cookies on your device, for example Google Analytics, Facebook and Twitter, which we use to enable social networking functionality and sharing and to monitor how visitors use our Service. These third party suppliers are responsible for the cookies they place on your device. Some of these cookies are session cookies, which will delete after you close the browser or app or log out. Other cookies can be deleted by using your browser or device settings. You may also use your browser or device settings to block cookies, although please note that this may limit your usability of the Service.  </span></span>
                    </p>
                </div>
            </div>
        </div>
    </template>
    <terms></terms>
@endsection