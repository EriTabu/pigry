@if(session('success'))
<div style="background:#d1fae5;padding:10px;margin-bottom:20px;">
    {{ session('success') }}
</div>
@endif