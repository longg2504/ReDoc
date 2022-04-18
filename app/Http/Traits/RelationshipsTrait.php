<?php

namespace App\Http\Traits;

use ErrorException;
use Illuminate\Database\Eloquent\Relations\Relation;
use ReflectionClass;
use ReflectionMethod;

trait RelationshipsTrait
{
    public function relationships()
    {

        $model = new static;

        $relationships = [];

        foreach ((new ReflectionClass($model))->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            if (
                $method->class != get_class($model) ||
                !empty($method->getParameters()) ||
                $method->getName() == __FUNCTION__
            ) {
                continue;
            }

            try {
                $return = $method->invoke($model);

                if ($return instanceof Relation) {

                    $foreignKey = null;

                    // dd((new ReflectionClass($return->getRelated()))->getProperties());

                    switch ((new ReflectionClass($return))->getShortName()) {

                        case 'MorphToMany':
                            # code...
                            break;
                        case 'BelongsToMany':
                            # code...
                            break;

                        default:
                            $foreignKey = $return->getForeignKeyName();
                            break;
                    }

                    $relationships[$method->getName()] = [
                        'type' => (new ReflectionClass($return))->getShortName(),
                        'model' => (new ReflectionClass($return->getRelated()))->getName(),
                        'foreignKey' => $foreignKey
                    ];
                }
            } catch (ErrorException $e) {
            }
        }

        return $relationships;
    }
}
