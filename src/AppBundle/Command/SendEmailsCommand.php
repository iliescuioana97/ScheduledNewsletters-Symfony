<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManager;

class SendEmailsCommand extends ContainerAwareCommand {

    protected $em;

    protected function configure() {
        $this
                ->setName('SendEmails')
                ->setDescription('...')
                ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
                ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $time = date('Y/m/d \O\n H:i:s');
        $this->em = $this->getContainer()->get('doctrine.orm.entity_manager');
        //$repository = $this->em->getRepository('AppBundle:Newsletter');
        //$newsletters = $repository->findAll(['sendDate' <= $time && 'isPublished' == false]);

        //var_dump($newsletters);
        // var_dump($newsletters);

        $query = $this->em->createQuery(
                        'SELECT p
        FROM AppBundle:Newsletter p
        WHERE p.sendDate >= :date
        AND p.isPublished = :val'
                )
        ->setParameter(':date',$time)
        ->setParameter(':val',0);

        $this->em = $query->getResult();
          var_dump($this->em);
          
          
         $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('nima@example.com')
        ->setTo('iliescuioana97@gmail.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/registration.html.twig',
                array('name' => $name)
            ),
            'text/html'
        );
    $this->get('mailer')->send($message);
    }

}
