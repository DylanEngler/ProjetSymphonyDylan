<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/01/2018
 * Time: 16:29
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FormationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idFormation', 'integer');
        $formMapper->add('nomFormation', 'text');
        $formMapper->add('datedebutFormation', 'date');
        $formMapper->add('datefinFormation', 'date');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idFormation')->add('nomFormation')->add('datedebutFormation')->add('datefinFormation');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('idFormation')->add('nomFormation')->add('datedebutFormation')->add('datefinFormation');
    }

}