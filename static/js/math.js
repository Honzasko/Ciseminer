

var elements = document.getElementsByClassName("render");
for(let i = 0;i < elements.length;i++)
{
    katex.render(elements[i].textContent,elements[i]);
}

console.log("rendered");