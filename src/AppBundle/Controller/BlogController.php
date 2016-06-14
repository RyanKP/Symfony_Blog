<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
public function listAction()
{
$posts = $this->get('doctrine')
->getManager()
->createQuery('SELECT p FROM AppBundle:Post p')
->execute();

return $this->render('Blog/list.html.php', array('posts' => $posts));
}

public function showAction($id)
{
$post = $this->get('doctrine')
->getManager()
->getRepository('AppBundle:Post')
->find($id);

if (!$post) {
// cause the 404 page not found to be displayed
throw $this->createNotFoundException();
}

return $this->render('Blog/show.html.php', array('post' => $post));
}
}
?>