<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 13/01/2018
 * Time: 11:51
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CompetenceAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idCompetence', 'integer');
        $formMapper->add('nomCompetence', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idCompetence')->add('nomCompetence');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('idCompetence')->add('nomCompetence');
    }
}