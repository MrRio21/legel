

<form method="POST" action="{{route('register')}}">
    @csrf
    <input name="first_name" type="text" placeholder="f name">
    <input name="last_name" type="text" placeholder="l name">
    <input name="email" placeholder="email" type="email">
    <input name="password" placeholder="pass" type="password">
    <input name="submit"  type="submit">
</form>
