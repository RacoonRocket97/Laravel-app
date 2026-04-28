<!DOCTYPE html>
<html>
<body>
<h2>{{ __('New Fan Message') }}</h2>
<p><strong>{{ __('From:') }}</strong> {{ $senderName }} ({{ $senderEmail }})</p>
<p><strong>{{ __('Message:') }}</strong></p>
<p>{{ $messageBody }}</p>
</body>
</html>