<?php

declare(strict_types = 1);

/**
 * ExceptionInterface
 * Normally, I really don't like naming things with a label that says what they are, but we're dealing with such a
 * narrow naming convention here that there really isn't anything better to call it. I'm skirting the edge of good
 * naming techniques here by having a `BaseException` implementing an `ExceptionInterface` while extending `Exception`.
 *
 * @idea There might be some value in breaking this out into its own package down the line.
 */

namespace TankerTrackers\Exceptions {

    /**
     * Interface ExceptionInterface
     *
     * @package TankerTrackers\Exceptions
     */
    interface ExceptionInterface {

        /**
         * ExceptionInterface constructor.
         *
         * @param mixed $message
         * @param int   $code
         */
        public function __construct ($message = null, $code = 0);

        /** @return mixed */
        public function __toString ();

        /** @return mixed */
        public function getCode ();

        /** @return mixed */
        public function getLine ();

        /** @return mixed */
        public function getFile ();

        /** @return mixed */
        public function getMessage ();

        /** @return mixed */
        public function getTrace ();

        /** @return mixed */
        public function getTraceAsString ();
    }
}
