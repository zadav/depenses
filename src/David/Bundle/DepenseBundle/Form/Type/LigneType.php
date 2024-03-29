<?php
namespace David\Bundle\DepenseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of LigneType
 *
 * @author David
 */
class LigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('jour','date')
                 ->add('libelle')
                 ->add('type')
                 ->add('montant')
                 ->add('bilan','entity', array(
                    'class' => 'DavidDepenseBundle:Bilan',
                    'property' => 'id',
                ))
                 ->add('category','entity', array(
                     'class' => 'DavidDepenseBundle:Category',
                     'property' => 'name'
                 ))
                 ->add('save','submit');
     
    }
    
    public function getName()
    {
        return 'ligne';
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'David\Bundle\DepenseBundle\Entity\Ligne',
        ));
    }
    
}
