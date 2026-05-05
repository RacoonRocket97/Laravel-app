<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('Terms and Conditions') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .terms-wrap { max-width: 900px; margin: 60px auto; padding: 0 20px 80px; }
        h1 { color: yellow; margin-bottom: 10px; }
        .last-updated { color: #666; font-size: 0.9rem; margin-bottom: 30px; }
        .terms-section { background: #111; padding: 40px; margin-bottom: 20px; }
        .terms-section h2 { color: yellow; font-size: 1.3rem; margin-bottom: 15px; margin-top: 25px; }
        .terms-section h2:first-child { margin-top: 0; }
        .terms-section p { color: #aaa; line-height: 1.7; margin-bottom: 15px; }
        .terms-section ul { color: #aaa; margin-left: 20px; margin-bottom: 15px; }
        .terms-section li { margin-bottom: 8px; line-height: 1.6; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="terms-wrap">
    <h1>{{ __('Terms and Conditions') }}</h1>
    <p class="last-updated">{{ __('Last Updated: January 2025') }}</p>

    <div class="terms-section">
        <h2>{{ __('1. Acceptance of Terms') }}</h2>
        <p>{{ __('By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.') }}</p>

        <h2>{{ __('2. Use License') }}</h2>
        <p>{{ __('Permission is granted to temporarily download one copy of the materials (information or software) on this website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:') }}</p>
        <ul>
            <li>{{ __('Modify or copy the materials') }}</li>
            <li>{{ __('Use the materials for any commercial purpose or for any public display') }}</li>
            <li>{{ __('Attempt to decompile or reverse engineer any software contained on the website') }}</li>
            <li>{{ __('Remove any copyright or other proprietary notations from the materials') }}</li>
            <li>{{ __('Transfer the materials to another person or "mirror" the materials on any other server') }}</li>
        </ul>

        <h2>{{ __('3. User Accounts') }}</h2>
        <p>{{ __('When you create an account with us, you must provide accurate, complete, and current information. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account.') }}</p>
        <p>{{ __('You are responsible for safeguarding the password that you use to access the service and for any activities or actions under your password.') }}</p>

        <h2>{{ __('4. User-Generated Content') }}</h2>
        <p>{{ __('Users may post content including photos, text, and other materials. You retain all rights to content you submit, post or display on the service. By posting content, you grant us a worldwide, non-exclusive, royalty-free license to use, reproduce, and display such content.') }}</p>
        <p>{{ __('You agree not to post content that:') }}</p>
        <ul>
            <li>{{ __('Is illegal, harmful, threatening, abusive, or otherwise objectionable') }}</li>
            <li>{{ __('Violates any intellectual property rights') }}</li>
            <li>{{ __('Contains viruses or malicious code') }}</li>
            <li>{{ __('Impersonates any person or entity') }}</li>
        </ul>

        <h2>{{ __('5. Ticket Sales and Bookings') }}</h2>
        <p>{{ __('All ticket sales and bookings are subject to availability. Prices are subject to change without notice. VIP bookings require advance confirmation and may have cancellation policies.') }}</p>
        <p>{{ __('Refund policies vary by event and package. Please review specific terms at the time of purchase.') }}</p>

        <h2>{{ __('6. Intellectual Property') }}</h2>
        <p>{{ __('All content on this website, including but not limited to text, graphics, logos, images, audio clips, and software, is the property of Sting or his content suppliers and is protected by international copyright laws.') }}</p>

        <h2>{{ __('7. Privacy Policy') }}</h2>
        <p>{{ __('Your use of the website is also governed by our Privacy Policy. We collect and process personal information in accordance with applicable data protection laws. User data is kept confidential and used only for service provision and communication purposes.') }}</p>

        <h2>{{ __('8. Limitation of Liability') }}</h2>
        <p>{{ __('In no event shall Sting or his representatives be liable for any damages (including, without limitation, damages for loss of data or profit) arising out of the use or inability to use the materials on this website.') }}</p>

        <h2>{{ __('9. Merchandise and Products') }}</h2>
        <p>{{ __('All merchandise is subject to availability. We reserve the right to limit quantities. Product descriptions and images are as accurate as possible but may vary slightly from actual products.') }}</p>

        <h2>{{ __('10. Links to Third-Party Sites') }}</h2>
        <p>{{ __('This website may contain links to third-party websites. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites.') }}</p>

        <h2>{{ __('11. Modifications') }}</h2>
        <p>{{ __('We reserve the right to revise these terms of service at any time without notice. By using this website, you agree to be bound by the current version of these terms and conditions.') }}</p>

        <h2>{{ __('12. Governing Law') }}</h2>
        <p>{{ __('These terms and conditions are governed by and construed in accordance with the laws of England and Wales, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.') }}</p>

        <h2>{{ __('13. Contact Information') }}</h2>
        <p>{{ __('If you have any questions about these Terms and Conditions, please contact us through our Contact page.') }}</p>
    </div>
</div>

</body>
</html>