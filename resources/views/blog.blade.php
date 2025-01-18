@vite('resources/css/app.css')
<a class="text-neutral-950" href="/">back to main page</a>

<form action="feedback" method="POST">
  <label>Enter name of topick <input class="border-solid border-2 border-sky-500" type="title" name="title"></label><br>
  <label>Enter your description <textarea class="border-solid border-2 border-sky-500" type="desc" name="desc"></textarea></label><br>
  <input type="submit" name="send" value="Send">
</form>

