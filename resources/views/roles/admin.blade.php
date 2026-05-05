<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.wrap{max-width:900px;margin:60px auto;padding:0 20px}.box{background:#111;padding:40px}
h2{color:yellow;margin-bottom:24px}table{width:100%;border-collapse:collapse}
th,td{text-align:left;padding:10px 14px;border-bottom:1px solid #222;color:#aaa}
th{color:yellow}
</style>
</head>
<body>
@include('partials.navbar')
<div class="wrap"><div class="box">
<h2>{{ __('Admin Panel — All Users') }}</h2>
<table>
    <tr>
        <th>{{ __('ID') }}</th>
        <th>{{ __('Name') }}</th>
        <th>{{ __('Email') }}</th>
        <th>{{ __('Role') }}</th>
        <th>{{ __('Joined') }}</th>
    </tr>
    @foreach($users as $u)
    <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->role }}</td>
        <td>{{ $u->created_at->format('Y-m-d') }}</td>
    </tr>
    @endforeach
</table>
</div></div>
</body></html>