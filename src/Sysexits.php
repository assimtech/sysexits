<?php

namespace Assimtech;

/**
 * A PHP Implementation of sysexits
 *
 * Copyright (c) 1987, 1993
 *  The Regents of the University of California.  All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. All advertising materials mentioning features or use of this software
 *    must display the following acknowledgement:
 *      This product includes software developed by the University of
 *      California, Berkeley and its contributors.
 * 4. Neither the name of the University nor the names of its contributors
 *    may be used to endorse or promote products derived from this software
 *    without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED.  IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
 * OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 * According to style(9),  it is not a good practice to call exit(3) with
 * arbitrary values to indicate a failure condition when ending a program.
 * Instead, the pre-defined exit codes from sysexits should be used, so the
 * caller of the process can get a rough estimation about the failure class
 * without looking up the source code.
 *
 * The successful exit is always indicated by a status of 0, or EX_OK. Error
 * numbers begin at EX__BASE to reduce the possibility of clashing with oth­
 * er exit statuses that random programs may already return.  The meaning of
 * the codes is approximately as follows:
 */
class Sysexits
{
    /**
     * successful termination
     * @const EX_OK
     */
    const EX_OK = 0;

    /**
     * base value for error messages
     * @const EX__BASE
     */
    const EX__BASE = 64;

    /**
     * The command was used incorrectly, e.g., with the
     * wrong number of arguments, a bad flag, a bad syntax
     * in a parameter, or whatever.
     * @const EX_USAGE
     */
    const EX_USAGE = 64;

    /**
     * The input data was incorrect in some way.  This
     * should only be used for user's data and not system
     * files.
     * @const EX_DATAERR
     */
    const EX_DATAERR = 65;

    /**
     * An input file (not a system file) did not exist or
     * was not readable.  This could also include errors
     * like ``No message'' to a mailer (if it cared to
     * catch it).
     * @const EX_NOINPUT
     */
    const EX_NOINPUT = 66;

    /**
     * The user specified did not exist.  This might be
     * used for mail addresses or remote logins.
     * @const EX_NOUSER
     */
    const EX_NOUSER = 67;

    /**
     * The host specified did not exist.  This is used in
     * mail addresses or network requests.
     * @const EX_NOHOST
     */
    const EX_NOHOST = 68;

    /**
     * A service is unavailable.  This can occur if a sup­
     * port program or file does not exist.  This can also
     * be used as a catchall message when something you
     * wanted to do doesn't work, but you don't know why.
     * @const EX_UNAVAILABLE
     */
    const EX_UNAVAILABLE = 69;

    /**
     * An internal software error has been detected.  This
     * should be limited to non-operating system related
     * errors as possible.
     * @const EX_SOFTWARE
     */
    const EX_SOFTWARE = 70;

    /**
     * An operating system error has been detected.  This
     * is intended to be used for such things as ``cannot
     * fork'', ``cannot create pipe'', or the like.  It
     * includes things like getuid returning a user that
     * does not exist in the passwd file.
     * @const EX_OSERR
     */
    const EX_OSERR = 71;

    /**
     * Some system file (e.g., /etc/passwd, /var/run/utmp,
     * etc.) does not exist, cannot be opened, or has some
     * sort of error (e.g., syntax error).
     * @const EX_OSFILE
     */
    const EX_OSFILE = 72;

    /**
     * A (user specified) output file cannot be created.
     * @const EX_CANTCREAT
     */
    const EX_CANTCREAT = 73;

    /**
     * An error occurred while doing I/O on some file.
     * @const EX_IOERR
     */
    const EX_IOERR = 74;

    /**
     * Temporary failure, indicating something that is not
     * really an error.  In sendmail, this means that a
     * mailer (e.g.) could not create a connection, and
     * the request should be reattempted later.
     * @const EX_TEMPFAIL
     */
    const EX_TEMPFAIL = 75;

    /**
     * The remote system returned something that was ``not
     * possible'' during a protocol exchange.
     * @const EX_PROTOCOL
     */
    const EX_PROTOCOL = 76;

    /**
     * You did not have sufficient permission to perform
     * the operation.  This is not intended for file sys­
     * tem problems, which should use EX_NOINPUT or
     * EX_CANTCREAT, but rather for higher level permis­
     * sions.
     * @const EX_NOPERM
     */
    const EX_NOPERM = 77;

    /**
     * Something was found in an unconfigured or miscon­
     * figured state.
     * @const EX_CONFIG
     */
    const EX_CONFIG = 78;

    /**
     * maximum listed value
     * @const EX__MAX
     */
    const EX__MAX = 78;
}
