<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Email;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/email.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/email", name="email")
    */
    public function emailAction(Request $request, \Swift_Mailer $mailer)
    {       
        $email = new Email(); 
        $form = $this->createFormBuilder($email)
            ->add('name', TextType::class, ['label' => 'Your Name*'])
            ->add('friendsname', TextType::class, ['label' => 'Friends Name*'])
            ->add('friendsemail', EmailType::class, ['label' => 'Friend Email*'])
            ->add('save', SubmitType::class, ['label' => 'Submit'])
            ->getForm();
        
        $form->handleRequest($request);         
        if ( $form->isSubmitted() && $form->isValid() )
        {            
            $email->setCreateddate(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($email);
            $entityManager->flush();

            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('noreply@grentr.com')
                ->setTo($email->getFriendsemail())
                ->setBody(
                    $this->renderView(                    
                        'default/email.html.twig',
                        ['name' => $email->getFriendsname(), 'fromName' => $email->getName()] // not needed but really should be in the email to give it personalisation
                    ),
                    'text/html'
                );
                // ->addPart(
                //     $this->renderView(
                //         'Emails/registration.txt.twig',
                //         ['name' => $name]
                //     ),
                //     'text/plain'
                // )            

            $mailer->send($message);

            return $this->redirectToRoute('thanks');
        }

        return $this->render('default/emailForm.html.twig', [
            'form' => $form->createView(),
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/thanks", name="thanks")
    */
    public function thanksAction(Request $request)
    {
      return $this->render('default/thanks.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
