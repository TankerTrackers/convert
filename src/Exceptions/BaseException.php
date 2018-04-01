<?php

declare(strict_types = 1);

namespace TankerTrackers\Exceptions {

    /**
     * Abstract Class BaseException
     *
     * @package TankerTrackers\Exceptions
     */
    abstract class BaseException
            extends \Exception
            implements ExceptionInterface {

        protected $message = 'Unknown exception';
        protected $code = 0;
        protected $file;
        protected $line;

        /**
         * BaseException constructor.
         *
         * @param mixed $message
         * @param int   $code
         */
        public function __construct ($message = null, $code = 0)
        {
            $this->message = $message;
            $this->code = $code;

            if ($message) {
                parent::__construct($message, $code);
            }
            else {
                throw new $this('Unknown ' . \get_class($this) . '.');
            }
        }

        /**
         * @return mixed|string
         */
        public function __toString ()
        {
            return \get_class($this) . ': ' . $this->message . ' in ' . $this->file . ':' . $this->line . '\n'
                    . $this->getTraceAsString() . '.';
        }

    }
}
