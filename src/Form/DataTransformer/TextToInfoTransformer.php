<?php
namespace App\Form\DataTransformer;

use App\ValueObject\Info;
use Symfony\Component\Form\DataTransformerInterface;

/**
 * This data transformer is used to translate the array of tags into a comma separated format
 * that can be displayed and managed by Bootstrap-tagsinput js plugin (and back on submit).
 *
 * See https://symfony.com/doc/current/form/data_transformers.html
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Jonathan Boyer <contact@grafikart.fr>
 */
class TextToInfoTransformer implements DataTransformerInterface {
    /**
     * {@inheritdoc}
     */
    public function transform($value): ?string {
        if (null !== $value) {
            $value = $value->getData();
        }
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value): ?Info {
        if ($value !== null) {
            $value = new Info($value);
        }
        return $value;
    }
}
