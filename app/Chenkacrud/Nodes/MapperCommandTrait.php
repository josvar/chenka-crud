<?php namespace Chenkacrud\Nodes;

use InvalidArgumentException;

trait MapperCommandTrait {

    /**
     * Mapea el parametro pasado al nombre completo de su correspondiente Command.
     * La convencion usada es: $NAMESPACE\Nodes\$NAMEs\$PREFIX$NAMECommand.
     *
     * Por ej para $name = 'article': Chenkacrud\Nodes\Articles\PublishArticleCommand.
     * @param string $name siempre es singular, por ej post, article, project, gallery
     * @param string $namespace
     * @param string $prefix
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getCommandClassName($name, $namespace = '', $prefix = '')
    {
        if( !is_string($name) && !is_string($namespace) && !is_string($prefix))
            throw new InvalidArgumentException;

        $name = ucfirst($name);
        $className = "{$namespace}\\Nodes\\{$name}s\\{$prefix}{$name}Command";
        return $className;
    }
} 