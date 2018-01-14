<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/01/2018
 * Time: 16:30
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CiviliteAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idCivilite', 'integer');
        $formMapper->add('nomMoi', 'text');
        $formMapper->add('prenomMoi', 'text');
        $formMapper->add('dateNaissanceMoi', 'date');
        $formMapper->add('adresseMoi', 'text');
        $formMapper->add('numeroMoi', 'integer');
        $formMapper->add('mailMoi', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idCivilite')->add('nomMoi')->add('prenomMoi')->add('dateNaissanceMoi')->add('adresseMoi')->add('numeroMoi')->add('mailMoi');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('idCivilite')->add('nomMoi')->add('prenomMoi')->add('dateNaissanceMoi')->add('adresseMoi')->add('numeroMoi')->add('mailMoi');
    }
}