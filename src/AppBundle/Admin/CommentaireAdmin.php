<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 14/01/2018
 * Time: 10:36
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentaireAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titreCommentaire', 'text');
        $formMapper->add('texteCommentaire', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreCommentaire')->add('texteCommentaire');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titreCommentaire')->add('texteCommentaire');
    }
}