<?php
namespace David\Bundle\DepenseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of LigneType
 *
 * @author David
 */
class LigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('jour')
                 ->add('libelle')
                 ->add('type')
                 ->add('save','submit');
     
    }
    
    public function getName()
    {
        return 'Bilan';
    }
}
