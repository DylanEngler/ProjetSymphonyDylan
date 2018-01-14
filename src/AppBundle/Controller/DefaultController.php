<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $data = "bonjour dylan";

        return $this->render('AppBundle:default:index.html.twig', [
            'welcome' => $data
        ]);
    }

    /**
     * @Route("/first", name="first")
     */

    public function firstAction(Request $request){
        return $this->render ('AppBundle:default:first.html.twig');
    }

    /**
     * @Route("/params/{name}", name="params")
     */

    public function paramsAction(Request $request, $name){
        $name=strtoupper($name);
        return $this->render ('AppBundle:default:params.html.twig', [
            'name'=> $name
        ]);
    }
    /**
     * @Route("/exo/{name}", name="exo", defaults={"name"=null})
     */

    public function exoAction(Request $request, $name){
        return $this->render ('AppBundle:default:exo.html.twig',[
            'name'=> $name,
            'url' => $this-> generateUrl( 'exo'),
            ]);
    }
    /**
     * @Route("/create_product",name="create_product")
     */
    public function createProduct(Request $request)
    {
        $product = new Product();
        $form = $this->createFormBuilder($product)
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('price', MoneyType::class)
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newProd = $form->getData();
            $em = $this->getDoctrine()
                ->getManager();
            $em ->persist($newProd);
            $em -> flush();
        }



        return $this->render('AppBundle:default:add_product.html.twig', ['form'=>$form->createView()]);
    }


    /**
     * @Route("/product/{id}",name="product", requirements={"id"="\d+"})
     */
    public function showProduct(Request $request, $id)
    {
        $repo = $this->getDoctrine() -> getRepository('AppBundle:Product');
        $prod = $repo->find($id);
        return $this->render('AppBundle:default:product.html.twig',['prd'=>$prod]);
    }



    /**
     * @Route("/products/{key}/{dir}",name="products", defaults={"key":"title", "dir":"asc"})
     */

    public function showAllProduct(Request $request, $key, $dir)
    {
        $session = $request->getSession();
        $search = $session->get('search');
        $form = $this->createFormBuilder()
            ->add('search', TextType::class, ['data' => $search])
            ->add('submit', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $search = $form->getData()['search'];
            $session->set('search',$search);
            //dump($search);
        }
        $repo = $this->getDoctrine() -> getRepository('AppBundle:Product')->findAllAsArray($key,$dir,$search);
        return $this->render('AppBundle:default:products.html.twig',['form'=>$form->createView(),'prd'=>$repo ,'key'=>$key , 'dir'=>$dir]);
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function showCV(Request $request){
        $cv = $this->getDoctrine() -> getRepository('AppBundle:civilite')->findAll();
        $competence = $this->getDoctrine() -> getRepository('AppBundle:competence')->findAll();
        $formation = $this->getDoctrine() -> getRepository('AppBundle:Formation')->findAll();
        $exp = $this->getDoctrine() -> getRepository('AppBundle:ExpPro')->findAll();
        return $this->render('AppBundle:default:cv.html.twig',['cv'=>$cv, 'comp'=>$competence, 'form'=>$formation,'exp'=>$exp]);
    }

    /**
     * @Route("/commentaire", name="commentaire")
     */
    public function showCommentaire(Request $request){
        $com = $this->getDoctrine() -> getRepository('AppBundle:Commentaire')->findAll();

        return $this->render('AppBundle:default:commentaire.html.twig',['com'=>$com]);
    }

    /**
     * @Route("/create_commentaire",name="create_commentaire")
     */
    public function createCommetaire(Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createFormBuilder($commentaire)
            ->add('titreCommentaire', TextType::class)
            ->add('texteCommentaire', TextareaType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newProd = $form->getData();
            $em = $this->getDoctrine()
                ->getManager();
            $em ->persist($newProd);
            $em -> flush();
            $com = $this->getDoctrine() -> getRepository('AppBundle:Commentaire');

            return $this->render('AppBundle:default:commentaire.html.twig',['com'=>$com]);
        }
        else {
            return $this->render('AppBundle:default:add_commentaire.html.twig', ['form'=>$form->createView()]);
        }



    }
}

