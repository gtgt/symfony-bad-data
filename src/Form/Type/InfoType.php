<?php
namespace App\Form\Type;

use App\Form\DataTransformer\TextToInfoTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class InfoType extends AbstractType {


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->addModelTransformer(new TextToInfoTransformer(), true);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options): void {

    }

    /**
     * {@inheritdoc}
     */
    public function getParent() {
        return TextareaType::class;
    }
}
