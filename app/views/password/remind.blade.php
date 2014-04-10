<form action="{{ action('RemindersController@postRemind') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form>