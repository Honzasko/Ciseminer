function ChangeTheme()
{
    const theme = document.cookie
    .split('; ')
    .find((row) => row.startsWith('quizknow_theme'))
    ?.split('=')[1];

    if(theme == "dark")
    {
        document.cookie = "quizknow_theme=light";
    }
    else {
        document.cookie = "quizknow_theme=dark";
    }
   document.location.reload()
}