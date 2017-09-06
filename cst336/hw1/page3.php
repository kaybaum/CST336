<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
      <meta charset="utf-8" />
      <title> Binary Trees</title>
      <link href="styler.css" rel="stylesheet" type="text/css" />
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body> <!--style="background-color:black; color:white"-->
        <header>
            <h1> Kayla Baum </h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="page1.php">Intro</a>
            <a href="page2.php">PBS</a>
            <a href="page3.php">Traversals</a>
            <a href="page4.php">Example</a>
        </nav>
        
        <br /><br />
        
         <main>
            <figure id="travePic">
                <img src="../portfolio/img/traversalTree.gif" alt="Picture of Binary Tree"/>
            </figure>
            
            <div id="traverseText">
               Trees can be traversed in multiple different ways, unlike linear data structures (array, linked list, queues, stacks)
               Depth First Traversals:<br/>
               <p> (a) Inorder (Left, Root, Right) : 4 2 5 1 3</p>
               <p> (b) Preorder (Root, Left, Right) : 1 2 4 5 3</p>
               <p> (c) Postorder (Left, Right, Root) : 4 5 2 3 1</p>
             
            </div>   
        </main>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST 336. 2017&copy; Baum <br />
            <strong> Disclaimer:</strong> The information on this webpage is for academic purposes only.
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>