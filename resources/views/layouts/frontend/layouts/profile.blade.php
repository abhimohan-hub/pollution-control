
<form action="{{ route('update.profile', $profiles->id) }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" value="{{ $profile->name ?? null }}" name="name" id="name">
<br>
<input type="text" value="{{ $profile->email ?? null }}" name="email" id="email">
<br>
<input type="type" value="{{ $profile->profile ?? null }}" name="profile" id="profile">
<br>
<input type="submit" value="Upload profile">
</form>
