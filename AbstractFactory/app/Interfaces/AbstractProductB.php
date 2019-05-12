<?php
namespace App\Interfaces;

interface AbstractProductB {
    /**
     * Продукт B способен работать самостоятельно...
     */
    public function usefulFunctionB(): string;

    /**
     * ...а также взаимодействовать с Продуктами Б той же вариации.
     *
     * Абстрактная Фабрика гарантирует, что все продукты, которые она создает,
     * имеют одинаковую вариацию и, следовательно, совместимы.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}