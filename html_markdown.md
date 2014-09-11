~~~.js
<script src="js/marked.js"></script>
<script>
$(document).ready(function() {
    elements = document.getElementsByTagName('md');
    console.log(elements);
    for (var i = 0; i < elements.length; i++) {
         elements[i].outerHTML = marked(elements[i].innerHTML);
    }
})
</script>

<md>
# Title

Some text:

- list item 1
- list item 2
- list item 3
</md>
~~~
